<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cirugia extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->model('Configuracion_model');
        $this->load->model('Usuario_Rol_model');
        $this->load->model('Citas_model');
        $this->load->model('Especialista_Horario_model');
        $this->load->model('Paciente_model');
        $this->load->helper(array('form', 'url'));
    }
    
    public function citas($page = 'index')
    {
        $hoy = date("Y-m-d");
        $doctor_id = 6;
        
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $_doctores = $this->Usuario_model->get_rol(ROL_DOCTOR);
        $_citas = $this->Citas_model->get_cirugias($doctor_id, $hoy);
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 2,
                'url' => $url,
                'user' => $user,
                'hoy' => $hoy,
        );
        
        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_rol', $rol);
        $this->smarty->assign('_citas', $_citas);
        $this->smarty->assign('_doctores', $_doctores);
        $this->smarty->view( 'agenda/citas-cirugias.tpl', $data );
    }
    
    public function programarCirugia($especialista_id = 0, $paciente_id = 0, $fecha = 0)
    {
        $adf = $this->Citas_model->set_agendar($especialista_id, $fecha, $paciente_id, PROCEDIMIENTO_QUIRURGICO);
        echo json_encode($adf);
    }
    
    public function agendaEspecialista($year = 0, $month = 0, $day = 0, $especialista_id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $agenda = array();
        $hoy = date("Y-m-d");
        $month = str_pad($month, 2, "0", STR_PAD_LEFT);
        $day = str_pad($day, 2, "0", STR_PAD_LEFT);
        $fecha = $year."-".$month."-".$day;
        $disabled = false;
        
        if($fecha < $hoy) { $disabled = true; }
        
        if($especialista_id != 0)
        {
            $agenda = $this->Citas_model->get_cirugias($especialista_id, $fecha);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'user' => $user,
                'agenda' => $agenda,
                'disabled' => $disabled,
                'hoy' => $hoy,
                'cita_tipo' => PROCEDIMIENTO_QUIRURGICO,
                'especialista_id' => $especialista_id
        );

        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_agenda',form_open('agenda/agenda')); 

        $this->form_validation->set_rules('identificacion', 'Identificación', 'required');
        $this->form_validation->set_rules('nombre', 'Nombre:', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->assign('_rol', $rol);
            $this->smarty->view( 'agenda/agenda.tpl', $data );
        }
        else
        {
            $asdf = $this->Citas_model->set_familiar();
            echo json_encode(array('st'=>1, 'msg'=>'Registro guardado con éxito. '.$asdf));
        }
    }
    
    
    public function getApoyoCirugia($cita_id = 0)
    {
        $url = $this->config->base_url();
        
        $roles = '(rol_id = '.ROL_DOCTOR.' or rol_id = '.ROL_ENFERMERA.' or rol_id = '.ROL_ANESTESIÓLOGA.') ';
        $especialistas = $this->Usuario_model->get_roles($roles);
        $especialistas_apoyo = $this->Citas_model->get_especialistasApoyo($cita_id);
        
        $data = array(
                'title' => 'Clínica Sanar',
                'url' => $url,
                'cita_id' => $cita_id,
                '_especialistas' => $especialistas,
                '_especialistas_apoyo' => $especialistas_apoyo
        );
        
        $this->smarty->view( 'agenda/especialistas-modal.tpl', $data );
    }
    
    public function setApoyoCirugia()
    {
        $url = $this->config->base_url();
        $cita_id = $this->input->post('cita_id');
        $abc = $this->Citas_model->set_especialistasApoyo();
        $especialistas_apoyo = $this->Citas_model->get_especialistasApoyo($cita_id);
        $data = array(
                'url' => $url,
                '_especialistas_apoyo' => $especialistas_apoyo,
        );
        $this->smarty->view( 'agenda/especialistas-apoyo.tpl', $data );
    }
      
    public function delApoyoCirugia()
    {
        $url = $this->config->base_url();
        $cita_id = $this->input->post('cita_id');
        $abc = $this->Citas_model->del_especialistasApoyo();
        $especialistas_apoyo = $this->Citas_model->get_especialistasApoyo($cita_id);
        $data = array(
                'url' => $url,
                '_especialistas_apoyo' => $especialistas_apoyo,
        );
        $this->smarty->view( 'agenda/especialistas-apoyo.tpl', $data );
    }
    
    
    public function consultarPaciente($paciente_id = 0, $horaini=0){
        $existe = array();
        $paciente = $this->Citas_model->getPaciente($paciente_id);
         if ($paciente->num_rows() > 0)
         {
             $dato = $paciente->row_array();
             $existe[0] = $dato["nombre1"]." ".$dato["nombre2"]." ".$dato["apellido1"]." ".$dato["apellido2"];
             $existe[1] = $dato["paciente_id"];
         }
         
         echo json_encode($existe);
    }
    
    public function facturar($cita_id = 0)
    {
        $url = $this->config->base_url();
        $cita = array();
        $facturacion = array();
        $existe_factura = false;
        $especialista = "";
        $paciente = "";
        
        $consulta_tipo = $this->Configuracion_model->get_consultaTipo();
        
        if($cita_id != 0){
            $cita = $this->Citas_model->get($cita_id);
            if(count($cita)>0){
                 $paciente = $cita[0]['nombre1']." ".$cita[0]['nombre2']." ".$cita[0]['apellido1']." ".$cita[0]['apellido2'];
                 $doctor = $this->Usuario_model->get_id($cita[0]['doctor_id']);
                 $especialista = $doctor['nombres']." ".$doctor['apellidos'];
                 $facturacion = $this->Citas_model->get_facturacion($cita_id);
                 if(count($facturacion)>0){
                     $existe_factura = TRUE;
                 }
            }
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'cita' => $cita,
                'especialista' => $especialista,
                'paciente' => $paciente,
                '_consulta_tipo' => $consulta_tipo,
                'cita_id' => $cita_id,
                'existe_factura' => $existe_factura,
                'facturacion' => $facturacion
        );
        
        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_facturacion',form_open('agenda/facturar')); 
        $this->smarty->view( 'agenda/facturacion-modal.tpl', $data );
    }
    
    public function setFacturacion()
    {
        $abc = $this->Citas_model->set_facturacion();
        echo $abc;
    }
    
    public function setEstadoCita()
    {
        $abc = $this->Citas_model->set_estadoCita();
        echo $abc;
    }
}

/* End of file cirugia.php */
/* Location: ./application/controllers/agenda/cirugia.php */