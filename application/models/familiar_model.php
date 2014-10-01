<?php
class Familiar_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_all()
    {
        $query = $this->db->get('familiar');
        return $query->result_array();
    }

    public function get_paciente_familiar($paciente_id = 0)
    {
        $this->db->select('familiar.id as familiar_id, nombre, parentesco, ocupacion, direccion, movil, descripcion AS parentesco_desc');
        $this->db->from('familiar');
        $this->db->join('paciente_familiar', 'familiar.id = paciente_familiar.familiar_id');
        $this->db->join('cnf_parentesco', 'parentesco = cnf_parentesco.id', 'left');
        $this->db->where('paciente_id ='.$paciente_id);
        $this->db->order_by("parentesco", "asc");          
   
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }

    public function get($familiar_id = 0)
    {
        if ($familiar_id == 0)
        {
                $query = $this->db->get('familiar');
                return $query->result_array();
        }

        $query = $this->db->get_where('familiar', array('id' => $familiar_id));
        return $query->row_array();
    }

    public function set_familiar($paciente_id=0, $familiar_id=0)
    {
        $this->load->helper('url');
        $data = array(
                'tipo_documento' => $this->input->post('fam_tipo_documento'),
                'identificacion' => $this->input->post('fam_identificacion'),
                'nombre' => $this->input->post('fam_nombre'),
                'parentesco' => $this->input->post('fam_parentesco'),
                'ocupacion' => $this->input->post('fam_ocupacion'),
                'anho_nacimiento' => $this->input->post('fam_nacimiento'),
                'direccion' => $this->input->post('fam_direccion'),
                'telefono' => $this->input->post('fam_telefono'),
                'movil' => $this->input->post('fam_movil'),
                'email' => $this->input->post('fam_email'),
                'vive' => $this->input->post('fam_vive'),
        );

        if($paciente_id==0){
            $paciente_id = $this->input->post('paciente_id');
        }
        if($familiar_id==0){
            $familiar_id = $this->input->post('familiar_id');
        }
        
        if($paciente_id>0)
        {
            if($familiar_id>0)
            {
                $this->db->where('id', $familiar_id);
                $this->db->update('familiar' ,$data);
            }
            else
            {
                $this->db->insert('familiar', $data);
                $familiar_id = $this->db->insert_id();
                $this->db->trans_complete();
                
                $data_pf = array(
                        'paciente_id' => $paciente_id,
                        'familiar_id' => $familiar_id,
                );
                
                $id = $this->db->insert('paciente_familiar', $data_pf);
            }
        }
        //print $this->db->last_query();
        return $familiar_id;
    }

    public function del_familiarPaciente($familiar_id, $paciente_id)
    {
        $condicion = array(
                        'familiar_id' => $familiar_id,
                        'paciente_id' => $paciente_id
                    );
        $this->db->where($condicion);
        $this->db->delete('paciente_familiar');
        
        $condicion2 = array(
                        'id' => $familiar_id
                    );
        $this->db->where($condicion2);
        return $this->db->delete('familiar');
    }
    
}