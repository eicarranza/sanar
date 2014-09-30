<?php
class Citas_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get($id = 0)
    {
        $condicion = array(
                        'citas.id' => $id,
                    );
        
        $query = $this->consultar($condicion);
        //print $this->db->last_query();
        return $query;
    }
    
    public function get_citas($doctor_id = 0, $fecha = "")
    {
        $condicion = array(
                        'especialista_id' => $doctor_id,
                        'DATE(fechahora)' => $fecha
                    );
        
        $this->db->select('`id`, `doctor_id`, `fechahora`, TIME(fechahora) AS hora, 
                            `citas`.`paciente_id`, `hora_ini`, `identificacion`, 
                            `nombre1`, `nombre2`, `apellido1`, `apellido2`, `cita_tipo_id`, 
                            `estado_cita_id`  ');
        $this->db->from('citas_especialistas_apoyo AS apoyo ');
        $this->db->join('citas', 'apoyo.cita_id = citas.id');
        $this->db->join('paciente', 'paciente.paciente_id = citas.paciente_id', 'left');
        $this->db->where($condicion);
        $this->db->order_by("hora", "asc");
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_cirugias($doctor_id = 0, $fecha = "")
    {
        $condicion = array(
                        'doctor_id' => $doctor_id,
                        'DATE(fechahora)' => $fecha,
                        'cita_tipo_id' => PROCEDIMIENTO_QUIRURGICO,
                        'citas.paciente_id !=' => '0',
                    );
        
        return $this->consultar($condicion);
    }
    
    public function get_agenda($especialista_id, $fecha)
    {
        $condicion = array(
                        'doctor_id' => $especialista_id,
                        'DATE(fechahora)' => $fecha,
                        'cita_tipo_id' => CONSULTA_EXTERNA,
                    );
        
        $query = $this->consultar($condicion);
        //print $this->db->last_query();
        return $query;
    }
    
    public function getPaciente($paciente_id = 0)
    {
        if ($paciente_id == 0)
        {
                $query = $this->db->get('paciente');
                return $query->result_array();
        }

        $query = $this->db->get_where('paciente', array('identificacion' => $paciente_id));
        return $query;
    }
    
    public function consultar($condicion)
    {
        $this->db->select('id, doctor_id, fechahora, TIME(fechahora) AS hora, citas.paciente_id,'
                            . 'hora_ini, identificacion, nombre1, nombre2, apellido1, apellido2,'
                            . 'cita_tipo_id, estado_cita_id ');
        $this->db->from('citas');
        $this->db->join('paciente', 'paciente.paciente_id = citas.paciente_id', 'left');
        $this->db->where($condicion);
        $this->db->order_by("hora", "asc");
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function set_agendar($especialista_id, $fecha, $paciente_id, $cita_tipo_id = 1)
    {
        $fecha = str_replace("%20", " ", $fecha);
        $hoy = date("Y-m-d");
        $cita_id = 0;
        $aprobado = true;
        $msj = "";
        $data = array(
                'doctor_id' => $especialista_id,
                'paciente_id' => $paciente_id,
                'fecha_reserva' => $hoy,
                'fechahora' => $fecha,
                'cita_tipo_id' => $cita_tipo_id,
        );
        
        $condicion = array(
                        'doctor_id' => $especialista_id,
                        'fechahora' => $fecha,
                    );
        
        $query = $this->db->get_where('citas', $condicion);
        $msj .= $this->db->last_query();
        if ($query->num_rows() > 0){
            $res = $query->row_array();
            $cita_id = $res['id'];
            $msj .= "; Cita_id = $cita_id; Paciente_id = ".$paciente_id;
            if($paciente_id == 0){
                $query_consulta = $this->db->get_where('consulta', array('id' => $cita_id));    //Consulta si el paciente ya tuvo una cita
                $msj .= $this->db->last_query();
                if ($query_consulta->num_rows() > 0){
                    $aprobado = false;  // Inhabilita la opción de borrar o actualizar la cita.
                }
            }
            else{
                if($res['paciente_id'] != 0){
                    $aprobado = false;
                }
            }
            
            if($aprobado){
                $this->db->where($condicion);
                $this->db->update('citas' ,$data);
                $msj .= $this->db->last_query();
            }
        }
        else{
            $this->db->insert('citas', $data);
            $cita_id = $this->db->insert_id();
            $msj .= $this->db->last_query();
            //print $this->db->last_query();
            $this->db->trans_complete();
        }
        
        
        if($especialista_id>0){
            $sql = 'INSERT INTO citas_especialistas_apoyo(cita_id, especialista_id)
                    VALUES (?, ?)
                    ON DUPLICATE KEY UPDATE 
                        especialista_id = VALUES(especialista_id)';

            $this->db->query($sql, array( $cita_id, $especialista_id)); 
        }
        else{
            $condicion_del = array(
                            'cita_id' => $cita_id,
                            'especialista_id' => $especialista_id
                        );

            $this->db->where($condicion_del);
            return $this->db->delete('citas_especialistas_apoyo');
        }
            
        return $aprobado;
    }
    
    public function set_cita()
    {
        $this->load->helper('url');
        
        $agenda_desde = $this->input->post('agenda_desde');
        $agenda_hasta = $this->input->post('agenda_hasta');
        $dia_ini = $this->input->post('hora_inicio');
        $dia_fin = $this->input->post('hora_fin');
        $descanso_ini = $this->input->post('descanso_ini');
        $descanso_fin = $this->input->post('descanso_fin');
        $duracion = $this->input->post('duracion');
        
        list( $hora, $minutos) = explode( ':', substr($dia_ini, 0, 5));
        $formato_dia_ini = substr($dia_ini, -2, 2); // devuelve "d"
        if($formato_dia_ini == "PM"){ 
            if($hora != 12){ $hora += 12; }
        }
        $horaInicial=$hora*60*60+$minutos*60;
        
        list( $hora, $minutos) = explode( ':', substr($dia_fin, 0, 5));
        $formato_dia_fin = substr($dia_fin, -2, 2); // devuelve "d"
        if($formato_dia_fin == "PM"){ 
            if($hora != 12){ $hora += 12; }
        }
        $horaFinal=$hora*60*60+$minutos*60;
        
        list( $hora, $minutos) = explode( ':', substr($descanso_ini, 0, 5));
        $formato_des_ini = substr($descanso_ini, -2, 2); // devuelve "d"
        if($formato_des_ini == "PM"){ 
            if($hora != 12){ $hora += 12; }   
        }
        $horaInicialDescanso=$hora*60*60+$minutos*60;
        
        list( $hora, $minutos) = explode( ':', substr($descanso_fin, 0, 5));
        $formato_des_fin = substr($descanso_fin, -2, 2); // devuelve "d"
        if($formato_des_fin == "PM"){
            if($hora != 12){ $hora += 12; }
        }
        $horaFinalDescanso=$hora*60*60+$minutos*60;
        
        $desde_dia = substr($agenda_desde, 8, 2); // devuelve "d"
        $desde_mes = substr($agenda_desde, 5, 2); // devuelve "m"
        $desde_anho = substr($agenda_desde, 0, 4); // devuelve "y"
        
        $hasta_dia = substr($agenda_hasta, 8, 2); // devuelve "d"
        $hasta_mes = substr($agenda_hasta, 5, 2); // devuelve "m"
        $hasta_anho = substr($agenda_hasta, 0, 4); // devuelve "y"
        
        $fechaInicial=mktime(0,0,0,$desde_mes,$desde_dia,$desde_anho);
        $fechaFinal=mktime(0,0,0,$hasta_mes,$hasta_dia,$hasta_anho);
        
        for($var=$fechaInicial;$var<=$fechaFinal;$var+=86400){
            for($hora=$horaInicial; $hora<$horaFinal; $hora+=$duracion*60){
                if(!($horaInicialDescanso<=$hora && $hora<$horaFinalDescanso)){
                    $data = array(
                            'doctor_id' => $this->input->post('especialista'),
                            'fechahora' => date("Y-m-d H:i:s",$var+$hora),
                            'hora_ini' => $hora,    
                            'hora_fin' => $horaInicialDescanso,
                            'cita_tipo_id' => '1',
                    );
                    
                    $condicion = array(
                        'doctor_id ' => $this->input->post('especialista'),
                        'fechahora ' => date("Y-m-d H:i:s",$var+$hora),
                    );
                    
                    $query = $this->db->get_where('citas', $condicion);
                    
                    if(count($query->result_array()) <= 0){
                        if($this->input->post('especialista') != 0){
                            $this->db->insert('citas', $data);
                        }
                    }                    
                }								
            }
        }
        
        return ;
    }
    
    public function set_especialistasApoyo()
    {
        $cita_id = $this->input->post('cita_id');
        $especialista_id = $this->input->post('especialista_id');
        
        $sql = 'INSERT INTO citas_especialistas_apoyo(cita_id, especialista_id)
                VALUES (?, ?)
                ON DUPLICATE KEY UPDATE 
                    especialista_id = VALUES(especialista_id)';
        $query = $this->db->query($sql, array( $cita_id, $especialista_id)); 
        //print $this->db->last_query();
        
        return ;
    }
    
    public function del_especialistasApoyo()
    {
        $cita_id = $this->input->post('cita_id');
        $especialista_id = $this->input->post('especialista_id');
        
        $condicion = array(
                        'cita_id' => $cita_id,
                        'especialista_id' => $especialista_id
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('citas_especialistas_apoyo');
    }
    
    // RETORNA LA FACTURA SOBRE CITA, SI EXISTE
    public function get_especialistasApoyo($cita_id = 0)
    {
        $this->db->select('cita_id, especialista_id, identificacion, nombres, apellidos, descripcion');
        $this->db->from('citas_especialistas_apoyo ');
        $this->db->join('usuarios', 'especialista_id = usuarios.id', 'left');
        $this->db->join('cnf_especialidades', 'cnf_especialidades.id = usuarios.especialidad', 'left');
        $this->db->where(array('cita_id' => $cita_id));
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    // RETORNA LA FACTURA SOBRE CITA, SI EXISTE
    public function get_facturacion($cita_id = 0)
    {
        $this->db->select('citas_id, fecha, consulta_tipo, valor, ct.descripcion, concepto_servicio_id ');
        $this->db->from('citas_facturacion as cf');
        $this->db->join('cnf_concepto_servicio_tipo as ct', 'cf.consulta_tipo = ct.id', 'left');
        $this->db->where(array('citas_id' => $cita_id));
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    // set_facturacion
    // Almacena la información de facturación de cita.
    
    public function set_facturacion()
    {
        $cita_id = $this->input->post('cita_id');
        $fecha = date("Y-m-d");
        $servicio_id = $this->input->post('servicio_id');
        $valor = $this->input->post('valor');
        
        $sql = 'INSERT INTO citas_facturacion(citas_id, fecha, consulta_tipo, valor)
                VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    fecha = VALUES(fecha),
                    consulta_tipo = VALUES(consulta_tipo), 
                    valor = VALUES(valor)';

        $query = $this->db->query($sql, array( $cita_id, 
                                       $fecha, 
                                       $servicio_id, 
                                       $valor
                                      )); 
        print $this->db->last_query();
        return ;
    }
 
    function set_estadoCita(){
        $cita_id = $this->input->post('cita_id');
        $estado = $this->input->post('estado');
        
        $condicion = array(
                        'id' => $cita_id
                    );
        $data = array(
                        'estado_cita_id' => $estado
                    );

        $this->db->where($condicion);
        $this->db->update('citas' ,$data);
        //print $this->db->last_query();
    }
}


/* End of file citas_model.php */
/* Location: ./application/models/citas_model.php */