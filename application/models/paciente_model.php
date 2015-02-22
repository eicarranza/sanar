<?php
class Paciente_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $this->db->order_by("paciente_id, nombre1, nombre2, apellido1, apellido2");
        $query = $this->db->get('paciente');
        
        return $query->result_array();
    }
    
    public function count_pacientes($buscar)
    {
        $where = 'concat(nombre1, nombre2, apellido1, apellido2) like replace("%'.$buscar.'%", " ", "") or identificacion like "%'.$buscar.'%" ';
        $this->db->where($where);
        //print $this->db->last_query();
        return $this->db->count_all_results('paciente');
    }
    
    public function list_pacientes($limit, $offset, $buscar='')
    {
        $this->db->limit($limit, $offset);
        $where = 'concat(nombre1, nombre2, apellido1, apellido2) like replace("%'.$buscar.'%", " ", "") or identificacion like "%'.$buscar.'%" ';
        $this->db->where($where);
        $this->db->order_by(" nombre1, nombre2, apellido1, apellido2");
        $query = $this->db->get('paciente');
        //print $this->db->last_query();
        return $query->result_array();
    }

    public function get($paciente_id = 0)
    {
        $this->db->select('paciente_id, historia, tipo_documento, identificacion, tc.descripcion as tc_documento, '
                        . 'nombre1, nombre2, apellido1, apellido2, sexo, grupo_sanguineo,'
                        . 'fecha_nacimiento, depto_id, mun_id, zona, direccion, '
                        . 'telefono, movil, email, estado_civil, ocupacion, ec.descripcion as ec_estado, '
                        . 'TIMESTAMPDIFF(YEAR, fecha_nacimiento, (CURRENT_DATE) ) AS anhos, '
                        . 'TIMESTAMPDIFF(MONTH, fecha_nacimiento, (CURRENT_DATE) ) AS meses, '
                        . 'TIMESTAMPDIFF(DAY, fecha_nacimiento, (CURRENT_DATE) ) AS dias');
        
        if ($paciente_id == 0){
            $query = $this->db->get('paciente');
            return $query->result_array();
        }

        $condicion = array('paciente_id' => $paciente_id);
        
        //$query = $this->db->get_where('paciente', $condicion);
        $this->db->from('paciente');
        $this->db->join('cnf_estado_civil ec', 'paciente.estado_civil = ec.id', 'left');
        $this->db->join('cnf_tipo_documento as tc', 'paciente.tipo_documento = tc.id', 'left');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }

    public function set_paciente()
    {
        $this->load->helper('url');
        $data = array(
                'tipo_documento' => $this->input->post('tipo_documento'),
                'historia' => $this->input->post('identificacion'),
                'identificacion' => $this->input->post('identificacion'),
                'nombre1' => $this->input->post('nombre1'),
                'nombre2' => $this->input->post('nombre2'),
                'apellido1' => $this->input->post('apellido1'),
                'apellido2' => $this->input->post('apellido2'),
                'sexo' => $this->input->post('sexo'),			
                'grupo_sanguineo' => $this->input->post('grupo_sanguineo'),
                'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
                'depto_id' => $this->input->post('depto_id'),
                'mun_id' => $this->input->post('mun_id'),
                'zona' => $this->input->post('zona'),
                'direccion' => $this->input->post('direccion'),
                'telefono' => $this->input->post('telefono'),
                'movil' => $this->input->post('movil'),
                'email' => $this->input->post('email'),
                'estado_civil' => $this->input->post('estado_civil'),
                'ocupacion' => $this->input->post('ocupacion'),
        );

        $id = $this->input->post('paciente_id');

        if($id>0){
                $this->db->where('paciente_id', $id);
                $this->db->update('paciente' ,$data);
        }
        else{
                $condicion = array(
                            'identificacion' => $this->input->post('identificacion'),
                            );
        
                $query = $this->db->get_where('paciente', $condicion);

                if ($query->num_rows() <= 0){
                    $this->db->insert('paciente', $data);
                    $id = $this->db->insert_id();
                    $this->db->trans_complete();
                }
        }
        return $id;
    }

}