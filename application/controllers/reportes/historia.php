<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Historia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usuario_rol_model');
        $this->load->model('Paciente_model');
        $this->load->model('Citas_model');
        $this->load->model('Consulta_model');
        $this->load->model('Configuracion_model');
        $this->load->model('Usuario_model');
        $this->load->model('Familiar_model');
    }
    
    public function paciente() {
        $user = $this->session->userdata("logged_user");
        $url = $this->config->base_url();
        $this->load->helper('pdf_helper');
        $fecha = "08/01/2013";
        $consulta = array();
        $sistema = array();
        $aPersonales = array();
        $aGinecologicos = array();
        $aFamiliares = array();
        $aObstetricos = array();
        $aPareja = array();
        $partes_cuerpo = array();
        $diagnostico = array();
        $diagnosticos = array();
        $edad = array();
        $especialista = array();
        $especialista_id = array();
        $familiar = array();
        
        $paciente_id = $this->input->post('paciente_id');
        $paciente = $this->Paciente_model->get($paciente_id);
        $historial_consultas = $this->Consulta_model->get_historialConsultas($paciente_id);
        $familiar = $this->Familiar_model->get_paciente_familiar($paciente_id);
        $aPersonales = $this->Consulta_model->get_aPersonales($paciente_id);
        $aGinecologicos = $this->Consulta_model->get_aGinecologicos($paciente_id);
        $aFamiliares = $this->Consulta_model->get_aFamiliares($paciente_id);
        $aObstetricos = $this->Consulta_model->get_aObstetricos($paciente_id);
        $aPareja = $this->Consulta_model->get_aPareja($paciente_id);

        $i = 0;
        
        foreach ($historial_consultas as $row){
            $j = 1;
        
            array_push($consulta, $this->Consulta_model->get_consulta($row['id']));
            $sistema[$i] = $this->Consulta_model->get_revisionSistema($row['id']);
            $partes_cuerpo[$i] = $this->Consulta_model->get_revisionFisica($row['id']);
            $diagnosticos = $this->Consulta_model->get_diagnostico($row['id']);
            $consultaExamen = $this->Consulta_model->get_consultaExamen($row['id']);
            $diagnostico[$i][0] = count($diagnosticos);
            
            foreach ($diagnosticos as $diag){
                $diagnostico[$i][$j] = $diag;
                $j++;
            }
            
             //print "...".$row['especialista_id'];
            $especialista_id[$i] = $row['especialista_id'];
            $especialista[$i] = $this->Usuario_model->get_id($row['especialista_id']);
            
            if($paciente['anhos']>0){ 
                $edad_anhos = $paciente['anhos']; 
                $edad[$i] = $edad_anhos." Años";
            }
            elseif($paciente['meses']>0){
                $edad_meses = $paciente['meses'];
                $edad[$i] = $edad_anhos." Meses";
            }
            elseif($paciente['dias']>0){
                $edad_meses = $paciente['dias']; 
                $edad[$i] = $edad_anhos." Días";
            }

            $i++;
        }

        
        $data = array(
                'user' => $user,
                'url' => $url,
                'cliente' => 'Clínica Sanar',
                'logo' => $url."assets/img/logo-azul.png",
                'codigo' => "FR-CS-13-V01",
                'vigencia' => "08/01/2013",
                'titulo' => "HOJA DE ATENCION INICIAL",
                'titulo2' => "HISTORIA CLINICA GINECOBSTETRICIA",
                'subtitulo' => "GESTION DOCUMENTAL",
                'fecha' => $fecha,
                'paciente' => $paciente,
                'familiar' => $familiar,
                'consulta' => $consulta,
                'sistema' => $sistema,
                'aPersonales' => $aPersonales,
                'aGinecologicos' => $aGinecologicos,
                'aFamiliares' => $aFamiliares,
                'aObstetricos' => $aObstetricos,
                'aPareja' => $aPareja,
                'partes_cuerpo' => $partes_cuerpo,
                'diagnosticos' => $diagnostico,
                'especialista' => $especialista,
                'especialista_id' => $especialista_id,
                'consultaExamen' => $consultaExamen,
                'edad' => $edad,
            );
        
        
        $this->load->view('reportes/historia', $data);        
    }
    
    public function interconsulta() {
        $user = $this->session->userdata("logged_user");
        $url = $this->config->base_url();
        $this->load->helper('pdf_helper');
        $fecha = "08/01/2013";
        $consulta = array();
        $sistema = array();
        $edad = "";
        $especialista = array();
        //$especialista_id = array();
        
        $consulta_id = $this->input->post('consulta_id');
        $paciente_id = $this->input->post('paciente_id');
        $especialidad_id = $this->input->post('especialidad_id');
        $especialista_id = $this->input->post('especialista_id');
        $paciente = $this->Paciente_model->get($paciente_id);
        $interconsulta = $this->Consulta_model->get_interconsulta($consulta_id, $especialidad_id);
        $especialista = $this->Usuario_model->get_id($especialista_id);

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

        
        
        $data = array(
                'user' => $user,
                'url' => $url,
                'cliente' => 'Clínica Sanar',
                'logo' => $url."assets/img/logo-azul.png",
                'codigo' => "FR-CS-13-V01",
                'vigencia' => "08/01/2013",
                'titulo' => "HOJA DE ATENCION INICIAL",
                'titulo2' => "INTERCONSULTA",
                'subtitulo' => "GESTION DOCUMENTAL",
                'fecha' => $fecha,
                'paciente' => $paciente,
                'interconsulta' => $interconsulta,
                'especialista' => $especialista,
                'especialidad_id' => $especialidad_id,
                'edad' => $edad,
            );
        
        
        $this->load->view('reportes/interconsulta', $data);        
    }
    
    public function tratamiento() {
        $user = $this->session->userdata("logged_user");
        $url = $this->config->base_url();
        $this->load->helper('pdf_helper');
        $fecha = "08/01/2013";
        $consulta = array();
        $edad = "";
        
        $consulta_id = $this->input->post('consulta_id');
        $paciente_id = $this->input->post('paciente_id');
        $paciente = $this->Paciente_model->get($paciente_id);
        $consulta = $this->Consulta_model->get_consulta($consulta_id);
                
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

        
        
        $data = array(
                'user' => $user,
                'url' => $url,
                'cliente' => 'Clínica Sanar',
                'logo' => $url."assets/img/logo-azul.png",
                'codigo' => "FR-CS-13-V01",
                'vigencia' => "08/01/2013",
                'titulo' => "HOJA DE ATENCION INICIAL",
                'titulo2' => "TRATAMIENTO",
                'subtitulo' => "GESTION DOCUMENTAL",
                'fecha' => $fecha,
                'paciente' => $paciente,
                'consulta' => $consulta,
                'edad' => $edad,
            );
        
        
        $this->load->view('reportes/tratamiento', $data);        
    }
    
    public function formula() {
        $user = $this->session->userdata("logged_user");
        $url = $this->config->base_url();
        $this->load->helper('pdf_helper');
        $fecha = "08/01/2013";
        $consulta = array();
        $sistema = array();
        $edad = "";
        $especialista = array();
        //$especialista_id = array();
        
        $consulta_id = $this->input->post('consulta_id');
        $paciente_id = $this->input->post('paciente_id');
        $especialidad_id = $this->input->post('especialidad_id');
        $especialista_id = $this->input->post('especialista_id');
        $paciente = $this->Paciente_model->get($paciente_id);
        $medicamentos = $this->Consulta_model->get_medicacion($consulta_id);
        $especialista = $this->Usuario_model->get_id($especialista_id);
        
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

        
        
        $data = array(
                'user' => $user,
                'url' => $url,
                'cliente' => 'Clínica Sanar',
                'logo' => $url."assets/img/logo-azul.png",
                'codigo' => "FR-CS-13-V01",
                'vigencia' => "08/01/2013",
                'titulo' => "HOJA DE ATENCION INICIAL",
                'titulo2' => "FÓRMULA MÉDICA",
                'subtitulo' => "GESTION DOCUMENTAL",
                'fecha' => $fecha,
                'paciente' => $paciente,
                'medicamentos' => $medicamentos,
                'especialista' => $especialista,
                'especialidad_id' => $especialidad_id,
                'edad' => $edad,
            );
        
        
        $this->load->view('reportes/formula', $data);        
    }
    
    public function procedimiento() {
        $user = $this->session->userdata("logged_user");
        $url = $this->config->base_url();
        $this->load->helper('pdf_helper');
        $fecha = "08/01/2013";
        $consulta = array();
        $sistema = array();
        $edad = "";
        $especialista = array();
        //$especialista_id = array();
        
        $consulta_id = $this->input->post('consulta_id');
        $paciente_id = $this->input->post('paciente_id');
        $especialidad_id = $this->input->post('especialidad_id');
        $especialista_id = $this->input->post('especialista_id');
        $paciente = $this->Paciente_model->get($paciente_id);
        $procedimientos = $this->Consulta_model->get_procedimiento($consulta_id);
        $especialista = $this->Usuario_model->get_id($especialista_id);
        
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

        $data = array(
                'user' => $user,
                'url' => $url,
                'cliente' => 'Clínica Sanar',
                'logo' => $url."assets/img/logo-azul.png",
                'codigo' => "FR-CS-13-V01",
                'vigencia' => "08/01/2013",
                'titulo' => "HOJA DE ATENCION INICIAL",
                'titulo2' => "ÓRDEN DE PROCEDIMIENTOS",
                'subtitulo' => "GESTION DOCUMENTAL",
                'fecha' => $fecha,
                'paciente' => $paciente,
                'procedimientos' => $procedimientos,
                'especialista' => $especialista,
                'especialidad_id' => $especialidad_id,
                'edad' => $edad,
            );
        
        
        $this->load->view('reportes/procedimiento', $data);        
    }
    
}