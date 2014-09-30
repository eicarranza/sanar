<?php
class Especialista_Horario_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }

    public function get_horario($especialista_id = 0)
    {
        $query = $this->db->get_where('especialista_horario', 
                    array('especialista_id' => $especialista_id));
        
        return $query->result_array();
    }
    
    public function set_horario()
    {
        $agenda_desde = $this->input->post('agenda_desde');
        $agenda_hasta = $this->input->post('agenda_hasta');
        $dia_ini = $this->input->post('hora_inicio');
        $dia_fin = $this->input->post('hora_fin');
        $descanso_ini = $this->input->post('descanso_ini');
        $descanso_fin = $this->input->post('descanso_fin');
        $duracion = $this->input->post('duracion');
        
        $data = array(
                'especialista_id' => $this->input->post('especialista'),
                'fecha_inicio' => $agenda_desde,
                'fecha_fin' => $agenda_hasta,
                'hora_inicio' => $dia_ini,    
                'hora_fin' => $dia_fin,
                'descanso_inicio' => $descanso_ini,    
                'descanso_fin' => $descanso_fin,
                'duracion' => $duracion,
        );

        $this->db->insert('especialista_horario', $data);
    }
}