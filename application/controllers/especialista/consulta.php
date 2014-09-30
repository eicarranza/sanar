<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_rol_model');
        $this->load->model('Paciente_model');
        $this->load->model('Citas_model');
        $this->load->model('Consulta_model');
        $this->load->model('Configuracion_model');
    }

    public function index(){
        $cita_id = $this->input->post('cita_id');
        $this->getConsulta($cita_id);
    }
    
    public function getConsulta($cita_id)
    {
        if(!@$this->user) redirect ('pages/login');

        $roles = $this->session->userdata("user_rol");
        $msj = "";
        foreach ($roles as $rol){
            if($rol['rol_id'] == 2){ $this->consultaGeneral($cita_id); }
            if($rol['rol_id'] == 7){ $this->consultaAnestesia($cita_id); }
            $msj = $rol['rol_id'];
        }
        
    }
    
    public function consultaAnestesia($cita_id){
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $url = $this->config->base_url();
        $cita = $this->Citas_model->get($cita_id);
        $hoy = date("Y-m-d");
        $consulta_activa = true;
        
        if (count($cita) > 0){
            $paciente_id = $cita[0]['paciente_id'];
            $fecha = $cita[0]['fechahora'];
            $cita_tipo_id = $cita[0]['cita_tipo_id'];
            $especialista_id = $cita[0]['doctor_id'];
            $paciente = $this->Paciente_model->get($paciente_id);
            // PREGUNTAR SI EXISTE CONSULTA
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            
            if(count($consulta)>0){
                //$this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, $fecha);
            }
            else{
                $lastConsulta = $this->Consulta_model->get_lastConsulta($paciente_id);
                if(count($lastConsulta)>0){
                    $this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, 
                            $fecha, $lastConsulta['peso'], $lastConsulta['talla'], 
                            $lastConsulta['imc']);
                }
                else{
                    $this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, $fecha);
                }
            }
            //  SI NO, OBTENER LOS DATOS DE CONSULTA ANTERIOR SI EXISTE Y GUARDAR
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            
            if(count($consulta) > 0){
                if($consulta['consulta_activa']!=true || $consulta['fecha'] < $hoy){
                    $consulta_activa = 0;
                }
            }
        }
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 7,
                'url' => $url,
                'user' => $user,
                'consulta' => $consulta,
                'consulta_activa' => $consulta_activa,
                'paciente_id' => $paciente_id,
                'paciente' => $paciente,
                'especialista' => $especialista_id,
                'fecha' => $fecha,
        );

        $this->smarty->assign('_rol', $rol);
        
        $this->smarty->view( 'especialista/anestesia/index.tpl', $data );
    }
    
    public function getAnestesiaExamen(){
        $url = $this->config->base_url();
        $cita_id = $this->input->post('cita_id');
        $consultaExamen = $this->Consulta_model->get_consultaAnestesiaExamen($cita_id);
        $consulta = $this->Consulta_model->get_consulta($cita_id);
        
        $data = array(
                'url' => $url,
                'consultaExamen' => $consultaExamen,
                'consulta' => $consulta,
        );
        
        $this->smarty->view( 'especialista/anestesia/examenes.tpl', $data );
    }
    
    public function getAnestesiaLaboratorios(){
        $url = $this->config->base_url();
        $cita_id = $this->input->post('cita_id');
        $consultaLaboratorios = $this->Consulta_model->get_consultaLaboratorios($cita_id);
            
        $data = array(
                'url' => $url,
                'consultaLaboratorios' => $consultaLaboratorios,
        );
        
        $this->smarty->view( 'especialista/anestesia/laboratorios.tpl', $data );
    }
    
    public function getAnestesiaPlan(){
        $url = $this->config->base_url();
        $anestesia_tipo = $this->Configuracion_model->get_anestesia_tipo();
        $cita_id = $this->input->post('cita_id');
        $anestesiaPlan = $this->Consulta_model->get_anestesiaPlan($cita_id);
            
        $data = array(
                'url' => $url,
                '_anestesia_tipo' => $anestesia_tipo,
                'anestesiaPlan' => $anestesiaPlan,
        );
        
        $this->smarty->view( 'especialista/anestesia/plan.tpl', $data );
    }
    
    public function getAnestesiaAntecedentes(){
        $url = $this->config->base_url();
        $paciente_id = $this->input->post('paciente_id');
        $aPersonales = $this->Consulta_model->get_aPersonales($paciente_id);
            
        $data = array(
                'url' => $url,
                'aPersonales' => $aPersonales,
        );
        
        $this->smarty->view( 'especialista/anestesia/antecedentes.tpl', $data );
    }
    
    public function consultaGeneral($cita_id){
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
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
        $cita = $this->Citas_model->get($cita_id);
        
        
        if (count($cita) > 0){
            $paciente_id = $cita[0]['paciente_id'];
            $fecha = $cita[0]['fechahora'];
            $cita_tipo_id = $cita[0]['cita_tipo_id'];
            $especialista_id = $cita[0]['doctor_id'];
            $paciente = $this->Paciente_model->get($paciente_id);
            // PREGUNTAR SI EXISTE CONSULTA
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            if(count($consulta)>0){
                //$this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, $fecha);
            }
            else{
                $lastConsulta = $this->Consulta_model->get_lastConsulta($paciente_id);
                if(count($lastConsulta)>0){
                    $this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, 
                            $fecha, $lastConsulta['peso'], $lastConsulta['talla'], 
                            $lastConsulta['imc']);
                }
                else{
                    $this->Consulta_model->set($cita_id, $paciente_id, $especialista_id, $fecha);
                }
            }
            //  SI NO, OBTENER LOS DATOS DE CONSULTA ANTERIOR SI EXISTE Y GUARDAR
            
            $consulta = $this->Consulta_model->get_consulta($cita_id);
            $interconsultas = $this->Consulta_model->get_Interconsulta($cita_id);
            $aFamiliares = $this->Consulta_model->get_aFamiliares($paciente_id);
            $aGinecologicos = $this->Consulta_model->get_aGinecologicos($paciente_id);
            $aObstetricos = $this->Consulta_model->get_aObstetricos($paciente_id);
            $aPareja = $this->Consulta_model->get_aPareja($paciente_id);
            $aPersonales = $this->Consulta_model->get_aPersonales($paciente_id);
            $consultaExamen = $this->Consulta_model->get_consultaExamen($cita_id);
            
            if(count($consulta) > 0){
                if($consulta['consulta_activa']!=true || $consulta['fecha'] < $hoy){
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
        }

        $especialidades = $this->Configuracion_model->get_especialidades();
        $finalidad_consulta = $this->Configuracion_model->get_finalidadConsulta();
        $tipo_diagnostico = $this->Configuracion_model->get_tipoDiagnostico();
        $causa_externa = $this->Configuracion_model->get_causaExterna();
        $sistema = $this->Consulta_model->get_revisionSistema($cita_id);
        $sistema_gineco = $this->Consulta_model->get_sistemaGineco($cita_id);
        $partes_cuerpo = $this->Consulta_model->get_revisionFisica($cita_id);
        $diagnostico = $this->Consulta_model->get_diagnostico($cita_id);
        $procedimiento = $this->Consulta_model->get_procedimiento($cita_id);
        $historial_diagnostico = $this->Consulta_model->get_historialDiagnostico($paciente_id);
        $medicamentos = $this->Consulta_model->get_medicacion($cita_id);
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 7,
                'url' => $url,
                'user' => $user,
                'agenda' => $agenda,
                'hoy' => $hoy,
                'fecha' => $fecha,
                'especialista' => $especialista_id,
                'paciente_id' => $paciente_id,
                'edad' => $edad,
                '_especialidades' => $especialidades,
                'paciente' => $paciente,
                'consulta' => $consulta,
                'consulta_examen' => $consultaExamen,
                '_tipo_diagnostico' => $tipo_diagnostico,
                'aFamiliares' => $aFamiliares,
                'aGinecologicos' => $aGinecologicos,
                'aObstetricos' => $aObstetricos,
                '_interconsultas' => $interconsultas,
                'aPareja' => $aPareja,
                'aPersonales' => $aPersonales,
                'consulta_id' => $consulta_id,
                '_partes_cuerpo' => $partes_cuerpo,
                '_finalidad_consulta' => $finalidad_consulta,
                '_causa_externa' => $causa_externa,
                '_sistema' => $sistema,
                '_procedimiento' => $procedimiento,
                '_diagnostico' => $diagnostico,
                '_sistema_gineco' => $sistema_gineco,
                '_medicamentos' => $medicamentos,
                '_historial_diagnostico' => $historial_diagnostico,
                'consulta_activa' => $consulta_activa,
                'cita_tipo_id' => $cita_tipo_id
        );

        $this->data['user'] = $user;
        $this->data['url'] = $url;
        
        $this->smarty->assign('_rol', $rol);
        
        $this->smarty->view( 'especialista/consulta.tpl', $data );
    }
    
    function getDiagnostico()
    {
        $term = $this->input->post('term');
        $json_array = array();
        
        $cie10 = $this->Configuracion_model->get_cie10(array('keyword' => $term));
        foreach ($cie10 as $row){
            array_push($json_array, array("id"=>$row->id, "codigo"=>$row->codigo, "descripcion"=>$row->descripcion));
        }

        echo json_encode($json_array);
    }
    
    function getProcedimiento()
    {
        $term = $this->input->post('term');
        $json_array = array();
        
        $cie10 = $this->Configuracion_model->get_cups(array('keyword' => $term));
        foreach ($cie10 as $row){
            array_push($json_array, array("id"=>$row->id, "codigo"=>$row->codigo, "descripcion"=>$row->descripcion));
        }

        echo json_encode($json_array);
    }
    
    public function cerrarConsulta()
    {
        $abc = $this->Consulta_model->set_cerrarConsulta();
        echo $url.'especialista/index';
    }
    
    public function setConsulta()
    {
        $abc = $this->Consulta_model->set_consulta("id", "consulta");
    }
    
    public function setInterconsulta()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->set_interconsulta();
        $interconsultas = $this->Consulta_model->get_interconsulta($consulta_id);
        $data = array(
                'url' => $url,
                '_interconsultas' => $interconsultas,
        );
        $this->smarty->view( 'especialista/interconsulta.tpl', $data );
    }
    
    public function delInterconsulta()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->del_interconsulta();
        $interconsultas = $this->Consulta_model->get_interconsulta($consulta_id);
        $data = array(
                'url' => $url,
                '_interconsultas' => $interconsultas,
        );
        $this->smarty->view( 'especialista/interconsulta.tpl', $data );
    }
    
    public function setConsultaExamen()
    {
        $abc = $this->Consulta_model->set_consulta("consulta_id", "consulta_examen");
    }
    
    public function setConsultaAnestesiaExamen()
    {
        $abc = $this->Consulta_model->set_consulta("consulta_id", "consulta_anestesia_examen");
    }
    
    public function setConsultaLaboratorios()
    {
        $abc = $this->Consulta_model->set_consulta("consulta_id", "consulta_laboratorios");
    }
    
    public function setAnestesiaPlan()
    {
        $abc = $this->Consulta_model->set_consulta("consulta_id", "consulta_anestesia_plan");
    }
    
    public function setAFamiliares()
    {
        $abc = $this->Consulta_model->set_antecedente("paciente_id", "consulta_antecedentes_familiares");
    }
    
    public function setAGinecologicos()
    {
        $abc = $this->Consulta_model->set_antecedente("paciente_id", "consulta_antecedentes_ginecologicos");
    }
    
    public function setAObstetricos()
    {
        $abc = $this->Consulta_model->set_antecedente("paciente_id", "consulta_antecedentes_obstetricos");
    }
    
    public function setAPareja()
    {
        $abc = $this->Consulta_model->set_antecedente("paciente_id", "consulta_antecedentes_pareja");
    }
    
    public function setAPersonales()
    {
        $abc = $this->Consulta_model->set_antecedente("paciente_id", "consulta_antecedentes_personales");
    }
    
    public function setRevisionSistema()
    {
        $abc = $this->Consulta_model->set_revisionSistema();
    }
    
    public function setRevisionFisica()
    {
        $abc = $this->Consulta_model->set_revisionFisica();
    }
    
    public function setDiagnostico()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->set_diagnostico();
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function delDiagnostico()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->del_diagnostico();
        $diagnostico = $this->Consulta_model->get_diagnostico($consulta_id);
        $data = array(
                'url' => $url,
                '_diagnostico' => $diagnostico,
        );
        $this->smarty->view( 'especialista/diagnosticos.tpl', $data );
    }
    
    public function setProcedimiento()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->set_procedimiento();
        $procedimiento = $this->Consulta_model->get_procedimiento($consulta_id);
        $data = array(
                'url' => $url,
                '_procedimiento' => $procedimiento,
        );
        $this->smarty->view( 'especialista/procedimientos.tpl', $data );
    }
    
    public function delProcedimiento()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->del_procedimiento();
        $procedimiento = $this->Consulta_model->get_procedimiento($consulta_id);
        $data = array(
                'url' => $url,
                '_procedimiento' => $procedimiento,
        );
        $this->smarty->view( 'especialista/procedimientos.tpl', $data );
    }
    
    
    public function setMedicacion()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->set_medicacion();
        $medicacion = $this->Consulta_model->get_medicacion($consulta_id);
        $data = array(
                'url' => $url,
                '_medicamentos' => $medicacion,
        );
        $this->smarty->view( 'especialista/medicacion.tpl', $data );
    }
    
    public function delMedicacion()
    {
        $url = $this->config->base_url();
        $consulta_id = $this->input->post('consulta_id');
        $abc = $this->Consulta_model->del_medicacion();
        $_medicacion = $this->Consulta_model->get_medicacion($consulta_id);
        $data = array(
                'url' => $url,
                '_medicamentos' => $_medicacion,
        );
        $this->smarty->view( 'especialista/medicacion.tpl', $data );
    }
}

/* End of file agenda.php */
/* Location: ./application/controllers/especialista/agenda.php */