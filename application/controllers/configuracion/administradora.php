<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administradora extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administradora_model');
        $this->load->model('Configuracion_model');
    }

    public function index($page = 'index')
    {
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $_administradoras = $this->Administradora_model->get_all();
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 5,
                'url' => $url,
                'user' => $user
        );

        if(!@$this->user) redirect ('pages/login');

        $this->smarty->assign('_administradoras', $_administradoras);
        $this->smarty->view( 'configuracion/administradora/index.tpl', $data );
    }

    public function nuevo($id = 0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if(!@$this->user) redirect ('pages/login');
        
        $usuario = array();
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $_roles = $this->Usuario_Rol_model->get_all();
        $usuario_roles = $this->Usuario_Rol_model->get($id);
        $tipo_documento = $this->Configuracion_model->get_tipo_documento();
        $especialidades = $this->Configuracion_model->get_especialidades();

        if($id != 0)
        {
            $usuario = $this->Usuario_model->get_id($id);
        }
        
        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 5,
                'url' => $url,
                'tipo_documento' => $tipo_documento,
                'especialidades' => $especialidades,
                'user' => $user,
                'usuario' => $usuario,
                'id' => $id
        );
        
        

        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_usuarios',form_open('administrador/nuevo')); 

        $this->form_validation->set_rules('identificacion', 'Identificación', 'required');
        $this->form_validation->set_rules('nombres', 'Primer nombre:', 'required');
        $this->form_validation->set_rules('apellidos', 'Primer apellido', 'required');

        if($this->form_validation->run() == FALSE)
        {
            $this->smarty->assign('_rol', $rol);
            $this->smarty->assign('_roles', $_roles);
            $this->smarty->assign('usuario_roles', $usuario_roles);
            $this->smarty->view( 'administrador/nuevo.tpl', $data );
        }
        else
        {
            $this->Usuario_model->set_usuario();
            redirect ('administrador/index');
        }
    }
    
    public function perfilUsuario()
    {
        $id = $_POST['usuario_id'];
        $this->Usuario_Rol_model->set_usuario_rol();
        redirect ('administrador/nuevo/'.$id);
    }
    
    public function eliminar($id=0)
    {   
        $this->usuario_model->eliminar_usuario($id);
        redirect ('administrador/index/'); 
    }

}

/* End of file administrador.php */
/* Location: ./application/controllers/administrador.php */