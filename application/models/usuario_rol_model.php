<?php
class Usuario_Rol_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('rol');
        return $query->result_array();
    }

    public function get($usuario_id)
    {
        $query = $this->db->get_where('usuarios_rol', array('usuario_id' => $usuario_id));
        return $query->result_array();
    }
    
    public function set_usuario_rol()
    {
        $this->load->helper('url');
        $id = $this->input->post('usuario_id');

        if($id>0)
        {
            $this->db->where('usuario_id',$id);
            $this->db->delete('usuarios_rol');
            
            $query = $this->db->get('rol');
            foreach ($query->result_array() as $row)
            {
                unset($data);
                $indice = "chk_".$row['id'];
                $dato = $this->input->post($indice);
                if($dato == 'on')
                {
                    $data = array(
                        'usuario_id' => $id,
                        'rol_id' => $row['id'],
                    );
                    
                    $this->db->insert('usuarios_rol', $data);
                }
            }
        }
        
        return ;
    }
}