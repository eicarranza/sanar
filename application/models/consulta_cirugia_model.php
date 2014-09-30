<?php
class Consulta_Cirugia_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }
    
    public function get_cirugia($id){
        if($id != 0){
            $condicion = array(
                        'consulta_id' => $id,
                    );
        }
        
        $this->db->select('consulta_id, TIME(inicio_procedimiento) AS inicio, 
                            TIME(fin_procedimiento) AS fin, inicio_procedimiento, fin_procedimiento, 
                            tiempo_operatorio, sangrado, complicaciones, tejidos_patologia, 
                            protesis, intervencion, procedimiento_descripcion, hallazgos');
        $this->db->from('consulta_cirugia');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_procedimiento($consulta_id=0)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, procedimiento_id, cups.codigo, cp.observacion as cp_observacion, cups.descripcion as cups_descripcion');
        $this->db->from('consulta_cirugia_procedimiento as cp');
        $this->db->join('cnf_cups as cups', 'cp.procedimiento_id = cups.id');
        $this->db->where($condicion);
        $query = $this->db->get();
        return $query->result_array();
        
    }
    
    public function get_evolucion($id){
        if($id != 0){
            $condicion = array(
                        'consulta_id' => $id,
                    );
        }
        
        $this->db->select("consulta_id, fecha, CONCAT(nombres, ' ', apellidos) AS especialista, 
                            DATE(fecha) AS fecha, TIME(fecha) AS hora, detalle", false);
        $this->db->from('consulta_cirugia_evolucion');
        $this->db->join('usuarios', 'especialista_id = usuarios.id', 'left');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_notas($id){
        if($id != 0){
            $condicion = array(
                        'consulta_id' => $id,
                    );
        }
        
        $this->db->select("consulta_id, fecha, CONCAT(nombres, ' ', apellidos) AS enfermera, 
                            DATE(fecha) AS fecha, TIME(fecha) AS hora, notas", false);
        $this->db->from('consulta_cirugia_enfermeria');
        $this->db->join('usuarios', 'especialista_id = usuarios.id', 'left');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function set_cirugia($id, $tabla=""){
        $consulta_id = $this->input->post('consulta_id');
        $campo_id = $this->input->post('campo');
        $valor = $this->input->post('valor');
        
        $sql = "INSERT INTO $tabla($id, $campo_id)
                VALUES (?, ?)
                ON DUPLICATE KEY UPDATE 
                    $campo_id = VALUES($campo_id)";

        $this->db->query($sql, array( $consulta_id, $valor)); 
        
        //print $this->db->last_query();
    }
    
    public function set_procedimiento()
    {
        $consulta_id = $this->input->post('consulta_id');
        $procedimiento_id = $this->input->post('procedimiento_id');
        $observacion = $this->input->post('observacion');
        
        $sql = "INSERT INTO consulta_cirugia_procedimiento(consulta_id, procedimiento_id, observacion)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    observacion = VALUES(observacion)";

        $this->db->query($sql, array( $consulta_id, $procedimiento_id, $observacion)); 
    }
    
    public function del_procedimiento()
    {
        $consulta_id = $this->input->post('consulta_id');
        $procedimiento_id = $this->input->post('procedimiento_id');
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'procedimiento_id' => $procedimiento_id
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('consulta_cirugia_procedimiento');
    }
    
    public function set_cirugiaTime($id, $tabla=""){
        $consulta_id = $this->input->post('consulta_id');
        $inicio = $this->input->post('inicio');
        $fin = $this->input->post('fin');
        $inicio = str_replace("%20", " ", $inicio);
        $fin = str_replace("%20", " ", $fin);
        
        $sql = "INSERT INTO $tabla($id, inicio_procedimiento, fin_procedimiento)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    inicio_procedimiento = VALUES(inicio_procedimiento),"
                . "fin_procedimiento = VALUES(fin_procedimiento)";

        $this->db->query($sql, array( $consulta_id, $inicio, $fin)); 
        
        //print $this->db->last_query();
    }
    
    public function set_evolucion($id, $tabla=""){
        $consulta_id = $this->input->post('consulta_id');
        $especialista_id = $this->input->post('especialista_id');
        $campo_id = $this->input->post('campo');
        $fecha = $this->input->post('fecha_hora');
        $fecha = str_replace("%20", " ", $fecha);
        $valor = $this->input->post('evolucion');
        
        $sql = "INSERT INTO consulta_cirugia_evolucion(consulta_id, especialista_id, fecha, detalle)
                VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    detalle = VALUES(detalle)";

        $this->db->query($sql, array( $consulta_id, $especialista_id, $fecha, $valor)); 
        
        //print $this->db->last_query();
    }
    
    public function set_enfermeria($id, $tabla=""){
        $consulta_id = $this->input->post('consulta_id');
        $especialista_id = $this->input->post('especialista_id');
        $campo_id = $this->input->post('campo');
        $fecha = $this->input->post('fecha_hora');
        $fecha = str_replace("%20", " ", $fecha);
        $valor = $this->input->post('nota');
        
        $sql = "INSERT INTO consulta_cirugia_enfermeria(consulta_id, especialista_id, fecha, notas)
                VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    notas = VALUES(notas)";

        $this->db->query($sql, array( $consulta_id, $especialista_id, $fecha, $valor)); 
        
        //print $this->db->last_query();
    }
    
    public function set_diagnostico($diagnostico_tipo = PREOPERATORIO){
        $consulta_id = $this->input->post('consulta_id');
        $diagnostico_id = $this->input->post('diagnostico_id');
        $descripcion = $this->input->post('descripcion');
        $tipo_diagnostico = $this->input->post('tipo_diagnostico');
        
        $sql = "INSERT INTO consulta_diagnostico(consulta_id, diagnostico_id, descripcion, 
                                                diagnostico_tipo_id, tipo_diagnostico_id)
                VALUES (?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    descripcion = VALUES(descripcion),
                    tipo_diagnostico_id = VALUES(tipo_diagnostico_id)";

        $this->db->query($sql, array( $consulta_id, $diagnostico_id, $descripcion, $diagnostico_tipo, $tipo_diagnostico)); 
    }
    
    public function del_diagnostico($diagnostico_tipo = PREOPERATORIO){
        $consulta_id = $this->input->post('consulta_id');
        $diagnostico_id = $this->input->post('diagnostico_id');
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'diagnostico_id' => $diagnostico_id,
                        'diagnostico_tipo_id' => $diagnostico_tipo
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('consulta_diagnostico');
    }
    
    public function set_documentacionCirugia($consulta_id, $documento_url)
    {
        $this->load->helper('url');
        $tipo = $this->input->post('tipo_documentacion');
        
        $data = array(
                'consulta_id' => $consulta_id,
                'documento_quirurgico_tipo' => $tipo,
                'documento_url' => $documento_url,
        );

        $this->db->insert('consulta_cirugia_documentacion', $data);

        $sql = 'INSERT INTO consulta_cirugia_documentacion(consulta_id, 
                                            documento_quirurgico_tipo, documento_url)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    documento_url = VALUES(documento_url)';

        $query = $this->db->query($sql, array( 
                                            $consulta_id, $tipo, $documento_url
                                        )); 

        return ;
    }
    
    public function del_pacienteArchivo($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('paciente_archivo');
    }
    
    public function get_archivos($consulta_id, $rol_id){
        if($consulta_id != 0){
            $condicion = array(
                        'consulta_id' => $consulta_id,
                        'rol_id' => $rol_id,
                    );
        }
        
        $this->db->select("consulta_id, documento_quirurgico_tipo as tipo_id, cnf.descripcion, documento_url", false);
        $this->db->from('consulta_cirugia_documentacion AS doc ');
        $this->db->join('cnf_tipo_documento_quirurgico AS cnf ', 'doc.documento_quirurgico_tipo = cnf.id');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
    
}