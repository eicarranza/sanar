<?php
class Usuario_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('usuarios');
        return $query->result_array();
    }

    public function get($usuario = FALSE, $contrasena = FALSE)
    {
        $query = $this->db->get_where('usuarios', array('usuario' => $usuario, 'contrasena'=>md5($contrasena)));
        return $query->row_array();
    }

    public function get_id($id = 0)
    {
        $query = $this->db->get_where('usuarios', array('id' => $id));
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_rol($rol_id = 0)
    {
        $this->db->select('id, nombres, apellidos');
        $this->db->from('usuarios');
        $this->db->join('usuarios_rol', 'usuarios.id = usuarios_rol.usuario_id');
        $this->db->where('rol_id ='.$rol_id);
        $this->db->order_by("nombres", "asc");          
   
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_roles($roles = '')
    {
        $this->db->select('id, nombres, apellidos');
        $this->db->from('usuarios');
        $this->db->join('usuarios_rol', 'usuarios.id = usuarios_rol.usuario_id');
        $this->db->where($roles);
        $this->db->order_by("nombres", "asc");          
   
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }

    public function set_usuario()
    {
        $this->load->helper('url');
        $contrasena = $this->input->post('contrasena');
        
        $data = array(
                'tipo_documento' => $this->input->post('tipo_documento'),
                'identificacion' => $this->input->post('identificacion'),
                'tarjeta_profesional' => $this->input->post('tarjeta_profesional'),
                'nombres' => $this->input->post('nombres'),
                'apellidos' => $this->input->post('apellidos'),
                'especialidad' => $this->input->post('especialidad'),
                'sexo' => $this->input->post('sexo'),
                'direccion' => $this->input->post('direccion'),
                'telefono' => $this->input->post('telefono'),
                'email' => $this->input->post('email'),
                'usuario' => $this->input->post('usuario'),
                'contrasena' => md5($contrasena),
        );

        $id = $this->input->post('usuario_id');

        if($id>0)
        {
            unset($data['usuario']);
            if(trim($contrasena) == '')
            {
                unset($data['contrasena']);
            }
            
            $this->db->where('id', $id);
            $this->db->update('usuarios' ,$data);
        }
        else
        {
                $this->db->insert('usuarios', $data);
        }
        return ;
    }

    public function set_contrasena()
    {
        $res = false;
        $this->load->helper('url');
        $data = array(
                'contrasena' => md5($this->input->post('contrasena_nueva'))
        );

        $where = array(
                'id' => $this->input->post('usuario_id'),
                'contrasena' => md5($this->input->post('contrasena_actual'))
        );

        $id = $this->input->post('usuario_id');

        if($id>0)
        {
                $this->db->where($where);
                $this->db->update('usuarios' ,$data);
        }

        return "Nada";
    }
    
    public function eliminar_usuario($id)
    {
        //$this->db->where('id',$id);
        //return $this->db->delete('paciente_archivo');
        return ;
    }
}