<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cirugia extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_rol_model');
        $this->load->model('Paciente_model');
        $this->load->model('Citas_model');
        $this->load->model('Consulta_model');
        $this->load->model('Consulta_Cirugia_model');
        $this->load->model('Configuracion_model');
    }

    public function index(){
        $cita_id = $this->input->post('cita_id');
        $this->getCirugia($cita_id);
    }
    
    public function getCirugia($cita_id){
        if(!@$this->user) redirect ('pages/login');

        $archivos = array();
        $cirugia = array();
        $consulta = array();
        $agenda = array();
        $paciente = array();
        $paciente_id = 0;
        $cita_tipo_id = 0;
        $especialista_id = 0;
        $consulta_id = 0;
        $consulta_activa = true;
        $fecha = "";
        $hoy = date("Y-m-d");
        //$cita_id = $this->input->post('cita_id');
        $edad_anhos = 0;
        $edad_meses = 0;
        $edad_dias = 0;
        $edad = "";
        $consulta_tipo = "";
        
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $cita = $this->Citas_model->get($cita_id);
        
        if (count($cita) > 0){
            $paciente_id = $cita[0]['paciente_id'];
            $fecha = $cita[0]['fechahora'];
            $cita_tipo_id = $cita[0]['cita_tipo_id'];
            $especialista_id = $cita[0]['doctor_id'];
            $paciente = $this->Paciente_model->get($paciente_id);
            // PREGUNTAR SI EXISTE CONSULTA
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            if(count($consulta)==0){
                $this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, $fecha, PROCEDIMIENTO_QUIRURGICO);
            }
            
            $documentos_cirujano = $this->Configuracion_model->get_tipo_documento_quirurgico(2);
            $documentos_enfermeria = $this->Configuracion_model->get_tipo_documento_quirurgico(8);
            $documentos_anestesia = $this->Configuracion_model->get_tipo_documento_quirurgico(7);
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            $cirugia = $this->Consulta_Cirugia_model->get_cirugia($cita_id);
            $evolucion = $this->Consulta_Cirugia_model->get_evolucion($cita_id);
            $notas = $this->Consulta_Cirugia_model->get_notas($cita_id);
            $diagnostico_pre = $this->Consulta_model->get_diagnostico($cita_id, PREOPERATORIO);
            $diagnostico_pos = $this->Consulta_model->get_diagnostico($cita_id, POSTOPERATORIO);
            $tipo_diagnostico = $this->Configuracion_model->get_tipoDiagnostico();
            $procedimiento = $this->Consulta_model->get_procedimiento($cita_id);
            $archivos_cirugia = $this->Consulta_Cirugia_model->get_archivos($cita_id, 2);
            $archivos_enfermeria = $this->Consulta_Cirugia_model->get_archivos($cita_id, 8);
            $archivos_anestesia = $this->Consulta_Cirugia_model->get_archivos($cita_id, 7);
            
            if($consulta['consulta_activa']!=true){
                $consulta_activa = 0;
            }
            
            if($paciente['anhos']>0){ 
                $edad_anhos = $paciente['anhos']; 
                $edad = $edad_anhos." Años";
            }
            elseif($paciente['meses']>0){
                $edad_meses = $paciente['meses'];
                $edad = $edad_anhos." Meses";
            }
            elseif($paciente['dias']>0){
                $edad_meses = $paciente['dias']; 
                $edad = $edad_anhos." Días";
            }
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 7,
                'url' => $url,
                'user' => $user,
                'documentos_anestesia' => $documentos_anestesia,
                'documentos_enfermeria' => $documentos_enfermeria,
                'documentos_cirujano' => $documentos_cirujano,
                'agenda' => $agenda,
                'hoy' => $hoy,
                'fecha' => $fecha,
                'especialista' => $especialista_id,
                'paciente_id' => $paciente_id,
                'edad' => $edad,
                'paciente' => $paciente,
                'cirugia' => $cirugia,
                'consulta' => $consulta,
                '_evolucion' => $evolucion,
                '_notas' => $notas,
                '_procedimiento' => $procedimiento,
                '_diagnostico_pre' => $diagnostico_pre,
                '_diagnostico_pos' => $diagnostico_pos,
                '_tipo_diagnostico' => $tipo_diagnostico,
                'consulta_activa' => $consulta_activa,
                'cita_tipo_id' => $cita_tipo_id,
                'archivos_enfermeria' => $archivos_enfermeria,
                'archivos_anestesia' => $archivos_anestesia,
                'archivos_cirugia' => $archivos_cirugia,
        );

        $this->data['user'] = $user;
        $this->data['url'] = $url;
        
        $this->smarty->assign('_rol', $rol);
        
        $this->smarty->view( 'especialista/quirurgico/index.tpl', $data );
    }
    
    public function cerrarConsulta()
    {
        $abc = $this->Consulta_model->set_cerrarConsulta();
        echo $url.'especialista/index';
    }
    
    public function setCirugia(){
        $abc = $this->Consulta_Cirugia_model->set_cirugia("consulta_id", "consulta_cirugia");
    }
    
    public function setProcedimiento(){
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->set_procedimiento();
        $procedimiento = $this->Consulta_Cirugia_model->get_procedimiento($consulta_id);
        $data = array(
                'url' => $url,
                '_procedimiento' => $procedimiento,
        );
        $this->smarty->view( 'especialista/procedimientos.tpl', $data );
    }
    
    public function delProcedimiento(){
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->del_procedimiento();
        $procedimiento = $this->Consulta_Cirugia_model->get_procedimiento($consulta_id);
        $data = array(
                'url' => $url,
                '_procedimiento' => $procedimiento,
        );
        $this->smarty->view( 'especialista/procedimientos.tpl', $data );
    }
    
    public function setCirugiaTime(){
        $abc = $this->Consulta_Cirugia_model->set_cirugiaTime("consulta_id", "consulta_cirugia");
    }
    
    public function setEvolucion()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->set_evolucion("consulta_id", "consulta_cirugia_evolucion");
        $evolucion = $this->Consulta_Cirugia_model->get_evolucion($consulta_id);
        $data = array(
                'url' => $url,
                '_evolucion' => $evolucion,
        );
        $this->smarty->view( 'especialista/quirurgico/evolucion.tpl', $data );
    }
    
    public function setEnfermeria()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->set_enfermeria("consulta_id", "consulta_cirugia_enfermeria");
        $notas = $this->Consulta_Cirugia_model->get_notas($consulta_id);
        $data = array(
                'url' => $url,
                '_notas' => $notas,
        );
        $this->smarty->view( 'especialista/quirurgico/enfermeria.tpl', $data );
    }
    
    public function setDiagnosticoPre()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->set_diagnostico(PREOPERATORIO);
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id, PREOPERATORIO);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function delDiagnosticoPre()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->del_diagnostico(PREOPERATORIO);
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id, PREOPERATORIO);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function setDiagnosticoPos()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->set_diagnostico(POSTOPERATORIO);
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id, POSTOPERATORIO);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function delDiagnosticoPos()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_Cirugia_model->del_diagnostico(POSTOPERATORIO);
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id, POSTOPERATORIO);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function setDocumentacion($consulta_id=0)
    {
        $user = $this->session->userdata("logged_user");
        $tipo = $this->input->post('tipo_documentacion');
        
        $config['upload_path'] = './uploads/Quirurgicos';
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';
        $config['file_name'] = 'HC-'.$consulta_id.'-'.$tipo;
        
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $str = "Se ha presentado un error al cargar el documento." . $this->upload->display_errors();
        }
        else
        {
            $archivo = $this->upload->data();
            $this->Consulta_Cirugia_model->set_documentacionCirugia($consulta_id, $archivo['client_name']);
            $str = "El documento ha sido cargado correctamente.";
        }
        
        redirect ('especialista/cirugia/'.$consulta_id);
        //print $str;
    }
}

/* End of file agenda.php */
/* Location: ./application/controllers/especialista/agenda.php */