<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuracion extends Private_Controller {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Configuracion_model');
        $this->load->helper(array('form', 'url'));
    }

    
    public function getMunicipio($id = 0)
    {
        $municipios = $this->Configuracion_model->get_municipio_id($id);
        $str = '<select class="form-control" name="mun_id" id="mun_id">'
                . '<option value="000">- SELECCIONE -</option>';
        $datos = array();
        foreach ($municipios as $mun)
        {
            $str .= '<option value="'.$mun['mun_id'].'">'.$mun['descripcion'].'</option>';
        }
        $str .= '</select>';
        echo $str;
    }
 
    public function getServicios($id = 0)
    {
        $servicios = $this->Configuracion_model->get_conceptoServicioTipo($id);
        $str = '<select class="form-control" name="servicio_id" id="servicio_id">'
                . '<option value="0">- SELECCIONE -</option>';
        $datos = array();
        
        foreach ($servicios as $i){
            $str .= '<option value="'.$i['id'].'">'.$i['descripcion'].'</option>';
        }
        $str .= '</select>';
        
        echo $str;
    }
    
}

/* End of file configuracion.php */
/* Location: ./application/controllers/configuracion.php */