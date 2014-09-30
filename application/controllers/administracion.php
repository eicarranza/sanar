<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends Private_Controller {
    public function __construct()
    {
            parent::__construct();
            $this->load->model('usuario_model');
            $this->load->model('Configuracion_model');
    }
    public function index()
    {
    }

    public function perfil()
    {
        $url = $this->config->base_url();
        $user = $this->session->userdata("logged_user");
        $rol = $this->session->userdata("user_rol");
        $tipo_documento = $this->Configuracion_model->get_tipo_documento();
        $usuario = $this->usuario_model->get_id($user['id']);

        $data = array(
                'title' => 'Clínica Sanar',
                'menu_id' => 0,
                'url' => $url,
                'user' => $user,
                'usuario' => $usuario,
                'tipo_documento' => $tipo_documento
        );

        if(!@$this->user){
            redirect ('pages/login');
        }

        $this->smarty->assign('_rol', $rol);
        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_perfil',form_open('perfil'));
        $this->form_validation->set_rules('identificacion', 'Identificación', 'required');
        $this->form_validation->set_rules('nombres', 'Primer nombre:', 'required');
        $this->form_validation->set_rules('apellidos', 'Primer apellido', 'required');

        if($this->form_validation->run() == FALSE)
        {
                $this->smarty->view( 'perfil.tpl', $data );
        }
        else
        {
                $this->usuario_model->set_usuario();
                redirect ('administracion/perfil');
        }		
    }

    public function contrasena()
    {
        $user = $this->session->userdata("logged_user");
        $this->smarty->assign('errors',validation_errors()); 
        $this->smarty->assign('form_contrasena',form_open('contrasena'));
        $this->form_validation->set_rules('contrasena_actual', 'Contraseña actual', 'required');
        $this->form_validation->set_rules('contrasena_nueva', 'Nueva contraseña', 'required');

        if($this->form_validation->run() == FALSE)
        {
                echo json_encode(array('st'=>0, 'msg'=>'ERROR: <br/>' . validation_errors()));
        }
        else
        {
            $txt_contrasena_actual = $this->input->post('contrasena_actual');

            // Obtenemos la informacion del usuario desde el modelo users.
            $logged_user = $this->usuario_model->get($user['usuario'], $txt_contrasena_actual);

            // Si existe el usuario creamos la sesion y redirigimos al index.
            if($logged_user) {
                    $this->usuario_model->set_contrasena();
                    $str = "La contrasena ha sido actualizada correctamente";
                    echo json_encode(array('st'=>1, 'msg'=>$str));
            }
            else{
                    $str = "La contrasena actual no coincide con la del sistema.";
                    echo json_encode(array('st'=>2, 'msg'=>$str));
            }
        }

    }
	
}


/* End of file configuracion.php */
/* Location: ./application/controllers/configuracion.php */