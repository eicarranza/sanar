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
        $this->db->select('id, nombre, parentesco, ocupacion, direccion, movil');
        $this->db->from('familiar');
        $this->db->join('paciente_familiar', 'familiar.id = paciente_familiar.familiar_id');
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

    public function set_familiar()
    {
        $this->load->helper('url');
        $data = array(
                'tipo_documento' => $this->input->post('tipo_documento'),
                'identificacion' => $this->input->post('identificacion'),
                'nombre' => $this->input->post('nombre'),
                'parentesco' => $this->input->post('parentesco'),
                'ocupacion' => $this->input->post('ocupacion'),
                'anho_nacimiento' => $this->input->post('nacimiento'),
                'direccion' => $this->input->post('direccion'),
                'telefono' => $this->input->post('telefono'),
                'movil' => $this->input->post('movil'),
                'email' => $this->input->post('email'),
                'vive' => $this->input->post('vive'),
        );

        $paciente_id = $this->input->post('paciente_id');
        $familiar_id = $this->input->post('familiar_id');
        
        
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
        else
        {
                
        }
         
        
        return $familiar_id;
    }

}