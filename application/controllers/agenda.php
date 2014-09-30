<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends Private_Controller {
	
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

    public function horario($page = 'index')
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $roles = '(rol_id = '.ROL_DOCTOR.' or rol_id = '.ROL_ANESTESIÓLOGA.') ';
        $_doctores = $this->Usuario_model->get_roles($roles);

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 2,
                'url' => $url,
                'user' => $user,
        );
        
        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_rol', $rol);
        $this->smarty->assign('_doctores', $_doctores);
        
        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_agenda',form_open('agenda/horario')); 
        
        $this->form_validation->set_rules('duracion', 'Agenda desde', 'required');
        $this->form_validation->set_rules('agenda_hasta', 'Agenda hasta:', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->assign('mensaje', 'No validado');
            $this->smarty->view( 'agenda/horario.tpl', $data );
        }
        else
        {
            $this->Citas_model->set_cita();
            $this->Especialista_Horario_model->set_horario();
            $this->smarty->assign('mensaje', 'Validado');
            $this->smarty->view( 'agenda/horario.tpl', $data );
        }
    }
    
    public function horarioEspecialista($especialista_id = 0)
    {
        $url = $this->config->base_url();
        $horario = array();
        if($especialista_id != 0)
        {
            $horario = $this->Especialista_Horario_model->get_horario($especialista_id);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'horario' => $horario,
                'especialista_id' => $especialista_id
        );

        $this->smarty->view( 'agenda/agenda-horario.tpl', $data );
        
    }
    
    public function citas($page = 'index')
    {
        $hoy = date("Y-m-d");
        $doctor_id = 6;
        
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        //$_doctores = $this->Usuario_model->get_rol(ROL_DOCTOR);
        $roles = '(rol_id = '.ROL_DOCTOR.' or rol_id = '.ROL_ANESTESIÓLOGA.') ';
        $_doctores = $this->Usuario_model->get_roles($roles);
        $_citas = $this->Citas_model->get_citas($doctor_id, $hoy);
        
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
        $this->smarty->view( 'agenda/citas.tpl', $data );
    }
    
    public function agendarCita($especialista_id = 0, $paciente_id = 0, $fecha = 0)
    {
        $adf = $this->Citas_model->set_agendar($especialista_id, $fecha, $paciente_id, CONSULTA_EXTERNA);
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
            $agenda = $this->Citas_model->get_agenda($especialista_id, $fecha);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'user' => $user,
                'agenda' => $agenda,
                'disabled' => $disabled,
                'hoy' => $hoy,
                'cita_tipo' => CONSULTA_EXTERNA,
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
        $servicios = array();
        $existe_factura = false;
        $especialista = "";
        $paciente = "";
        
        $concepto_servicio = $this->Configuracion_model->get_conceptoServicio();
        $departamento = $this->Configuracion_model->get_departamento();
        
        if($cita_id != 0){
            $cita = $this->Citas_model->get($cita_id);
            if(count($cita)>0){
                 $paciente = $cita[0]['nombre1']." ".$cita[0]['nombre2']." ".$cita[0]['apellido1']." ".$cita[0]['apellido2'];
                 $doctor = $this->Usuario_model->get_id($cita[0]['doctor_id']);
                 $especialista = $doctor['nombres']." ".$doctor['apellidos'];
                 $facturacion = $this->Citas_model->get_facturacion($cita_id);
                 if(count($facturacion)>0){
                     $servicios = $this->Configuracion_model->get_conceptoServicioTipo($facturacion['concepto_servicio_id']);
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
                '_concepto_servicio' => $concepto_servicio,
                '_servicio' => $servicios,
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

/* End of file agenda.php */
/* Location: ./application/controllers/agenda.php */