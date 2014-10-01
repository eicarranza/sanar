<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pacientes extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Paciente_model');
        $this->load->model('Familiar_model');
        $this->load->model('Configuracion_model');
        $this->load->model('Paciente_Archivo_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('pagination');
    }

    public function index($page = 'index')
    {
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $_pacientes = $this->Paciente_model->get_all();

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'user' => $user
        );
        
        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_rol', $rol);
        $this->smarty->assign('_pacientes', $_pacientes);
        $this->smarty->view( 'paciente/index.tpl', $data );
    }
    
   public function lista($offset='', $buscar='')
   {
       
      $limit = 10;
      $total = $this->Paciente_model->count_pacientes($buscar);
      
      $config['base_url'] = $this->config->site_url()."/pacientes/lista/";
      $config['total_rows'] = $total;
      $config['per_page'] = $limit;
      $config['uri_segment'] = '3';
      $this->pagination->initialize($config);
      $pag_links = $this->pagination->create_links();
      
      $_pacientes = $this->Paciente_model->list_pacientes($limit, $offset, $buscar);
      $url = $this->config->base_url();
      $user = $this->session->userdata("logged_user");
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'user' => $user,
                'pag_links' => $pag_links
        );
        
        $this->smarty->assign('pacientes', $_pacientes);
        $this->smarty->view('paciente/lista_pacientes.tpl', $data);
   }
   
    public function nuevo($id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        if(!@$this->user) redirect ('pages/login');

        $paciente = "";
        $archivos = array();
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $grupo_sanguineo = $this->Configuracion_model->get_grupo_sanguineo();
        $tipo_documento = $this->Configuracion_model->get_tipo_documento();
        $departamento = $this->Configuracion_model->get_departamento();
        $municipio = array();
        $estado_civil = $this->Configuracion_model->get_estado_civil();
        $parentesco = $this->Configuracion_model->get_parentesco();
        $familiar = array();
        
        if($id != 0)
        {
            $paciente = $this->Paciente_model->get($id);
            $familiar = $this->Familiar_model->get_paciente_familiar($id);
            $archivos = $this->Paciente_Archivo_model->get_archivos($id);
            $municipio = $this->Configuracion_model->get_municipio_id($paciente['depto_id']);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'grupo_sanguineo' => $grupo_sanguineo,
                'tipo_documento' => $tipo_documento,
                'departamento' => $departamento,
                'municipio' => $municipio,
                'estado_civil' => $estado_civil,
                'parentesco' => $parentesco,
                'user' => $user,
                'paciente' => $paciente,
                '_familiar' => $familiar,
                'id' => $id
        );

        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_pacientes',form_open('pacientes/nuevo')); 

        $this->form_validation->set_rules('identificacion', 'Identificación', 'required');
        $this->form_validation->set_rules('nombre1', 'Primer nombre:', 'required');
        $this->form_validation->set_rules('apellido1', 'Primer apellido', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->assign('_rol', $rol);
            $this->smarty->assign('archivos', $archivos);
            $this->smarty->view( 'paciente/nuevo.tpl', $data );
        }
        else
        {
            $this->Paciente_model->set_paciente();
            redirect ('pacientes/index');
        }
    }
    
    public function familiar($id = 0, $paciente_id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $tipo_documento = $this->Configuracion_model->get_tipo_documento();
        $parentesco = $this->Configuracion_model->get_parentesco();
        $familiar = array();
        
        if($id != 0)
        {
            $familiar = $this->Familiar_model->get($id);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'tipo_documento' => $tipo_documento,
                'parentesco' => $parentesco,
                'user' => $user,
                'familiar' => $familiar,
                'familiar_id' => $id,
                'paciente_id' => $paciente_id
        );

        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_familiar',form_open('pacientes/familiar')); 

        $this->form_validation->set_rules('fam_identificacion', 'fam_Identificación', 'required');
        $this->form_validation->set_rules('fam_nombre', 'fam_Nombre:', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->assign('_rol', $rol);
            $this->smarty->view( 'paciente/familiar.tpl', $data );
        }
        else
        {
            $asdf = $this->Familiar_model->set_familiar();
            json_encode(array('st'=>1, 'msg'=>'Registro guardado con éxito. '.$asdf));
        }
    }
    
    public function familiares($id = 0)
    {
        if(!@$this->user) redirect ('pages/login');

        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $familiar = array();
        
        if($id != 0)
        {
            $familiar = $this->Familiar_model->get_paciente_familiar($id);
        }

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'user' => $user,
                '_familiar' => $familiar,
                'id' => $id
        );

        $this->smarty->view( 'paciente/familiares.tpl', $data );
    }
    
    public function familiaresEliminar($familiar_id=0, $paciente_id=0)
    {
        $this->Familiar_model->del_familiarPaciente($familiar_id, $paciente_id);
        redirect ('pacientes/nuevo/'.$paciente_id);
    }
    
    public function hcdigital($id=0)
    {
        $user = $this->session->userdata("logged_user");
        $paciente = $this->Paciente_model->get($id);

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '10000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1080';
        $config['file_name'] = 'HC-'.$paciente['historia'];
        
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $str = "Se ha presentado un error al cargar el documento." . $this->upload->display_errors();
        }
        else
        {
            $archivo = $this->upload->data();
            $this->Paciente_Archivo_model->set_pacienteArchivo($id, 1, $archivo['client_name'], $archivo['file_name'], '');
            $str = "El documento ha sido cargado correctamente.";
        }
        
        redirect ('pacientes/nuevo/'.$id);
    }
    
    public function hcdigitalEliminar($id=0, $paciente_id=0)
    {
        $user = $this->session->userdata("logged_user");
        $archivo = $this->Paciente_Archivo_model->get($id);
        $url = $this->config->base_url();
        
        $file = './uploads/'. $archivo['archivo'];
        if (file_exists($file)) 
        {
            $do = unlink($file);
        }
        
        $this->Paciente_Archivo_model->del_pacienteArchivo($id);
        redirect ('pacientes/nuevo/'.$paciente_id);
    }
    
    public function nuevoModal($id = 0, $horaini = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $paciente = "";
        $url = $this->config->base_url();
        $tipo_documento = $this->Configuracion_model->get_tipo_documento();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $grupo_sanguineo = $this->Configuracion_model->get_grupo_sanguineo();
        $departamento = $this->Configuracion_model->get_departamento();
        $municipio = array();
        $estado_civil = $this->Configuracion_model->get_estado_civil();
        $parentesco = $this->Configuracion_model->get_parentesco();
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 1,
                'url' => $url,
                'tipo_documento' => $tipo_documento,
                'grupo_sanguineo' => $grupo_sanguineo,
                'departamento' => $departamento,
                'municipio' => $municipio,
                'parentesco' => $parentesco,
                'estado_civil' => $estado_civil,
                'user' => $user,
                'paciente' => $paciente,
                'id' => 0,
                'horaini' => $horaini,
                'identificacion' => $id,
        );


        
        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_pacientes',form_open('pacientes/nuevoModal')); 

        $this->form_validation->set_rules('identificacion', 'Identificación', 'required');
        $this->form_validation->set_rules('nombre1', 'Primer nombre:', 'required');
        $this->form_validation->set_rules('apellido1', 'Primer apellido', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->view( 'paciente/nuevo-modal.tpl', $data );
        }
        else
        {
            $this->Paciente_model->set_paciente();
            echo json_encode(array('st'=>1, 'msg'=>'Registro guardado con éxito. '.$asdf));
        }
    }
    
    public function guardarModal($id=0){
        $paciente_id = $this->Paciente_model->set_paciente();
        $asdf = $this->Familiar_model->set_familiar($paciente_id);
    }
}

/* End of file pacientes.php */
/* Location: ./application/controllers/pacientes.php */