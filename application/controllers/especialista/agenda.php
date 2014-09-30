<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_rol_model');
        $this->load->model('Paciente_model');
        $this->load->model('Familiar_model');
        $this->load->model('Consulta_model');
        $this->load->model('Citas_model');
    }

    public function index($page = 'home')
    {
        $agenda = array();
        $hoy = date("Y-m-d");

        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $agenda = $this->Citas_model->get_agenda($user['id'], $hoy);

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 0,
                'url' => $url,
                'user' => $user,
                'agenda' => $agenda,
                'hoy' => $hoy,
        );

        $this->data['user'] = $user;
        $this->data['url'] = $url;
        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_rol', $rol);
        $this->smarty->view( 'especialista/index.tpl', $data );
    }
    
    public function agendaDia()
    {
        $url = $this->config->base_url();
        $hoy = date("Y-m-d");
        $user = $this->session->userdata("logged_user");
        $agenda = $this->Citas_model->get_citas($user['id'], $hoy);

        $data = array(
                'url' => $url,
                'agenda' => $agenda,
        );
        
        $this->smarty->view( 'especialista/agenda.tpl', $data );
    }
    
    public function paciente($id = 0)
    {
        $url = $this->config->base_url();
        $cita = $this->Citas_model->get($id);
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $paciente = array();
        $familiar = array();
        $fecha = "";
        $especialista_id = "";
        $edad = "";
        $consulta_tipo = "";
        $cita_tipo_id = 0;
        
        if (count($cita) > 0){
            $cita_tipo_id = $cita[0]['cita_tipo_id'];
            $paciente_id = $cita[0]['paciente_id'];
            $paciente = $this->Paciente_model->get($cita[0]['paciente_id']);
            $familiar = $this->Familiar_model->get_paciente_familiar($cita[0]['paciente_id']);
            $fecha = $cita[0]['fechahora'];
            $especialista_id = $cita[0]['doctor_id'];
            
            if($paciente['anhos']>0){ 
                $edad_anhos = $paciente['anhos']; 
                $edad = $edad_anhos." Años";
            }
            elseif($paciente['meses']>0){
                $edad_meses = $paciente['meses'];
                $edad = $edad_meses." Meses";
            }
            elseif($paciente['dias']>0){
                $edad_dias = $paciente['dias']; 
                $edad = $edad_dias." Días";
            }
            
            $facturacion = $this->Citas_model->get_facturacion($id);
            if(count($facturacion) > 0){
                $consulta_tipo = $facturacion['descripcion'];
            }
        }
        
        $data = array(
                'url' => $url,
                '_rol' => $rol,
                'cita_id' => $id,
                'paciente_id' => $paciente_id,
                'edad' => $edad,
                'paciente' => $paciente,
                'familiar' => $familiar,
                'fecha' => $fecha,
                'especialista' => $especialista_id,
                'consulta_tipo' => $consulta_tipo,
                'cita_tipo_id' => $cita_tipo_id
        );

        $this->smarty->view( 'especialista/paciente.tpl', $data );
        
    }
    
    public function pacientes(){
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $_pacientes = $this->Paciente_model->get_all();

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 8,
                'url' => $url,
                'user' => $user
        );
        
        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_rol', $rol);
        $this->smarty->assign('_pacientes', $_pacientes);
        $this->smarty->view( 'especialista/pacientes.tpl', $data );
    }
    
    public function pacienteConsultas()
    {
        $url = $this->config->base_url();
        $paciente_id = $this->input->post('paciente_id');
        $historial_diagnostico = $this->Consulta_model->get_historialDiagnostico($paciente_id);
        
        $data = array(
                'url' => $url,
                'paciente_id' => $paciente_id,
                '_historial_diagnostico' => $historial_diagnostico,
        );
        
        $this->smarty->view( 'especialista/pacientes_diagnosticos.tpl', $data );
    }
}

/* End of file agenda.php */
/* Location: ./application/controllers/especialista/agenda.php */