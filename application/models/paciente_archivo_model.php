<?php
class Paciente_Archivo_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get($id = 0)
    {
        $query = $this->db->get_where('paciente_archivo', array('id' => $id));
        return $query->row_array();
    }

    public function get_archivos($paciente_id = 0)
    {
        $query = $this->db->get_where('paciente_archivo', array('paciente_id' => $paciente_id));
        return $query->result_array();
    }

    public function set_pacienteArchivo($paciente_id, $tipo='', $nombre='', $archivo, $descripcion='')
    {
        $this->load->helper('url');
        $data = array(
                'paciente_id' => $paciente_id,
                'archivo_tipo' => $tipo,
                'nombre' => $nombre,
                'archivo' => $archivo,
                'descripcion' => $descripcion,
        );

        $this->db->insert('paciente_archivo', $data);

        return ;
    }
    
    public function del_pacienteArchivo($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('paciente_archivo');
    }

}