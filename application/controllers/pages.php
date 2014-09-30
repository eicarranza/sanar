<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends Private_Controller {
	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('usuario_rol_model');
        }
        
	public function index($page = 'home')
	{
		$url = $this->config->base_url();
		$user = $this->session->userdata("logged_user");
                $rol = $this->session->userdata("user_rol");
		
		$data = array(
                        'title' => 'Clínica Sanar',
                        'menu_id' => 0,
                        'url' => $url,
                        'user' => $user
                );
                
                $this->data['user'] = $user;
                $this->data['url'] = $url;
		if(!@$this->user) redirect ('pages/login');
		
                $this->smarty->assign('_rol', $rol);
		$this->smarty->view( 'index.tpl', $data );
	}
	
	public function login() 
	{
		$url = $this->config->base_url();
		
		$data = array(
			'title' => 'Clínica Sanar',
                        'menu_id' => 0,
                        'url' => $url
		);
		
        // Añadimos las reglas necesarias.
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
		
        // Generamos el mensaje de error personalizado para la accion 'required'
        $this->form_validation->set_message('required', 'El campo %s es requerido.');

        // Si no esta vacio $_POST
        if(!empty($_POST)) {
            // Si las reglas se cumplen, entramos a la condicion.
            if ($this->form_validation->run() == TRUE) 
            {
                // Obtenemos la informacion del usuario desde el modelo users.
                $logged_user = $this->usuario_model->get($_POST['username'], $_POST['password']);

                // Si existe el usuario creamos la sesion y redirigimos al index.
                if($logged_user) 
                {
                    $user_rol = $this->usuario_rol_model->get($logged_user['id']);
                    
                    $this->session->set_userdata('logged_user', $logged_user);
                    $this->session->set_userdata('user_rol', $user_rol);
                    redirect('pages/index');
                } 
                else 
                {
                    // De lo contrario se activa el error_login.
                    $data['error_login'] = TRUE;
                }
            }
        }
		
        $this->load->view('login', $data);
    }

    public function logout() {
        $this->session->unset_userdata('logged_user');
        $this->session->unset_userdata('user_rol');
        redirect('pages/index');
    }
	
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */