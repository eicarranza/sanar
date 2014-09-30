<?php
class Consulta_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_consulta($id)
    {
        $condicion = "";
        if($id != 0){
            $condicion = array(
                        'consulta.id' => $id,
                    );
        }
        
        $this->db->select('id, paciente.paciente_id, historia, paciente.nombre1, paciente.apellido1, '
                            . 'fecha_consulta, date(fecha_consulta) as fecha, TIME(fecha_consulta) as hora, especialista_id, '
                            . 'motivo, enfermedad_actual, impresion_general, peso, talla, peso_ideal, '
                            . 'tanner_genital, tanner_vello_pubico, imc, perimetro_cefalico, '
                            . 'perimetro_toraxico, frecuencia_cardiaca, frecuencia_respiratoria, '
                            . 'tension_arterial, temperatura_maxilar, alimentacion, evolucion, '
                            . 'finalidad_consulta, causa_externa, medicacion, tratamiento, '
                            . 'recomendaciones, observacion, consulta_activa');
        $this->db->from('consulta');
        $this->db->join('paciente', 'paciente.paciente_id = consulta.paciente_id', 'left');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_lastConsulta($paciente_id)
    {
        if($paciente_id != 0){
            $condicion = array(
                        'consulta.paciente_id' => $paciente_id,
                    );
        }
        
        $this->db->select('id, fecha_consulta, date(fecha_consulta) as fecha,  '
                            . 'TIME(fecha_consulta) as hora, especialista_id, '
                            . 'motivo, enfermedad_actual, impresion_general, '
                            . 'peso, talla, peso_ideal, tanner_genital, '
                            . 'tanner_vello_pubico, imc, perimetro_cefalico, '
                            . 'perimetro_toraxico, frecuencia_cardiaca, frecuencia_respiratoria, '
                            . 'tension_arterial, temperatura_maxilar, alimentacion, evolucion, '
                            . 'finalidad_consulta, causa_externa, medicacion, '
                            . 'tratamiento, recomendaciones, consulta_activa');
        $this->db->from('consulta');
        $this->db->where($condicion);
        $this->db->order_by("fecha", "desc");
        $this->db->limit("1");
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function set($id, $paciente_id, $especialista_id, $fecha, $peso=0, 
                            $talla=0, $imc=0)
    {
        $sql = 'INSERT INTO consulta(id, paciente_id, especialista_id, fecha_consulta,
                                        peso, talla, imc)
                VALUES (?, ?, ?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    paciente_id = VALUES(paciente_id), 
                    especialista_id = VALUES(especialista_id), 
                    fecha_consulta = VALUES(fecha_consulta),
                    peso = VALUES(peso),
                    talla = VALUES(talla),
                    imc = VALUES(imc) ';

        $query = $this->db->query($sql, array( $id, 
                                       $paciente_id, 
                                       $especialista_id, 
                                       $fecha, $peso, $talla, $imc
                                      )); 

        return ;
    }
    
    public function get_historialConsultas($paciente_id=0)
    {
        $condicion = array(
                        'paciente_id' => $paciente_id,
                    );
        
        $this->db->select('c.id, DATE(fecha_consulta) AS fecha, especialista_id');
        $this->db->from('consulta as c');
        $this->db->where($condicion);
        $this->db->order_by("fecha", "desc");          
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }
    
    public function get_interconsulta($consulta_id, $especialidad_id = 0)
    {
        if($especialidad_id != 0){
            $condicion = array(
                        'especialidad_id' => $especialidad_id,
                    );
        
        }
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, especialidad_id, ci.descripcion as ci_descripcion, '
                . 'abreviatura, esp.descripcion as esp_descripcion');
        $this->db->from('consulta_interconsulta as ci');
        $this->db->join('cnf_especialidades as esp', 'ci.especialidad_id = esp.id');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }
        
    public function get_aFamiliares($id)
    {
        $condicion = array(
                        'paciente_id' => $id,
                    );
        
        $this->db->select('paciente_id, descripcion');
        $this->db->from('consulta_antecedentes_familiares');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_aGinecologicos($id)
    {
        $condicion = array(
                        'paciente_id' => $id,
                    );
        
        $this->db->select('paciente_id, menarca, fm, fum, fpp, vida_sexual, '
                . 'numero_parejas, ets, vaginitis, fu_citologia, anticoncepcion,'
                . 'anticoncepcion_tipo, anticoncepcion_inicio, '
                . 'anticoncepcion_tiempo, anticoncepcion_suspension, '
                . 'citologia_vaginal, vacunacion_uph');
        $this->db->from('consulta_antecedentes_ginecologicos');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_aObstetricos($id)
    {
        $condicion = array(
                        'paciente_id' => $id,
                    );
        
        $this->db->select('paciente_id, deseado, partos, cesarea, aborto, mortinato, '
                . '     ectopico, vivo, intergenesia, malformacion, prematuro, '
                . '     diabetes_gestacional, hta, infeccion, isoinmunizacion,'
                . '     atencion_prenatal, numero_consultas, examenes_complementarios, '
                . '     alterados, medicina_gestacional, vacunacion_td, vacunacion_influenza,'
                . '     vacunacion_hayb, vacunacion_famarilla, vacunacion_varicela, '
                . '     vacunacion_rabia, otros');
        $this->db->from('consulta_antecedentes_obstetricos');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_aPareja($id)
    {
        $condicion = array(
                        'paciente_id' => $id,
                    );
        
        $this->db->select('paciente_id, enfermedades_cronicas, impotencia, ets');
        $this->db->from('consulta_antecedentes_pareja');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_aPersonales($id)
    {
        $condicion = array(
                        'paciente_id' => $id,
                    );
        
        $this->db->select('paciente_id, habitos_toxicos, fisiologicos, patologicos,'
                            . 'quirurgicos, traumatologicos, alergicos, transfusiones,'
                            . 'medicamentos, obstetricos');
        $this->db->from('consulta_antecedentes_personales');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
        
    public function get_consultaExamen($consulta_id)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, examen_ginecologico');
        $this->db->from('consulta_examen');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_consultaAnestesiaExamen($consulta_id)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, consciente, alerta, deambulando, aspecto, 
                            disnea_scc, dolor_precordial, cf, mets, mallampati, atm, 
                            dtm, cuello_movil, simetrico, via_aerea, ruidos_cardiacos, 
                            campos_pulmonares, abdomen, extremidades, snc');
        $this->db->from('consulta_anestesia_examen');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_consultaLaboratorios($consulta_id)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, tp, tpt, hb, hto, plt, k_leu, k_creat, 
                            gli, bun, rx_torax, ekg_trazo, imagenes, otro, asa, por');
        $this->db->from('consulta_laboratorios');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_anestesiaPlan($consulta_id)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, programar_cirugia, ayuno, horas, observacion, 
                            anestesia_tipo, pop_hospitalizacion, reservar,
                            uds_gre, suspender_medicamentos, interconsulta_con, 
                            paraclinicos, control_resultados, observaciones');
        $this->db->from('consulta_anestesia_plan');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->row_array();
    }
    
    public function get_revisionSistema($consulta_id=0)
    {
        $this->db->select('consulta_id, cnf_sistema.id, descripcion, valoracion');
        $this->db->from('cnf_sistema');
        $this->db->join('consulta_sistema', 'cnf_sistema.id = consulta_sistema.sistema_id AND consulta_id = "'.$consulta_id.'"', 'left');
        $this->db->order_by("cnf_sistema.id", "asc");          
   
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }
    
    public function get_revisionFisica($consulta_id=0)
    {
        $this->db->select('consulta_id, cnf.id, descripcion, valoracion');
        $this->db->from('cnf_parte_cuerpo as cnf');
        $this->db->join('consulta_parte_cuerpo as con', 'cnf.id = con.parte_cuerpo_id AND consulta_id = "'.$consulta_id.'"', 'left');
        $this->db->order_by("cnf.id", "asc");          
   
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
    }

    public function get_sistemaGineco($consulta_id=0)
    {
        $this->db->select('consulta_id, cnf_sistema_gineco.id, descripcion, valoracion');
        $this->db->from('cnf_sistema_gineco');
        $this->db->join('consulta_sistema_gineco', 'cnf_sistema_gineco.id = sistema_gineco_id AND consulta_id = "'.$consulta_id.'"', 'left');
        $this->db->order_by("cnf_sistema_gineco.id", "asc");          
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }
    
    public function get_procedimiento($consulta_id=0)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, procedimiento_id, cups.codigo, cp.observacion as cp_observacion, cups.descripcion as cups_descripcion');
        $this->db->from('consulta_procedimiento as cp');
        $this->db->join('cnf_cups as cups', 'cp.procedimiento_id = cups.id');
        $this->db->where($condicion);
        $query = $this->db->get();
        return $query->result_array();
        
    }
    
    public function get_diagnostico($consulta_id=0, $diagnostico_tipo = PREOPERATORIO)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'diagnostico_tipo_id' => $diagnostico_tipo,
                    );
        
        $this->db->select('consulta_id, diagnostico_id, cie.codigo, cd.descripcion as cd_descripcion, '
                        . 'cie.descripcion as cie_descripcion, diagnostico_tipo_id, tipo_diagnostico_id, tipo.descripcion as tipo_descripcion');
        $this->db->from('consulta_diagnostico as cd');
        $this->db->join('cnf_cie10 as cie', 'cd.diagnostico_id = cie.id');
        $this->db->join('cnf_tipo_diagnostico as tipo', 'cd.tipo_diagnostico_id = tipo.id');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }
    
    public function get_historialDiagnostico($paciente_id=0)
    {
        $condicion = array(
                        'paciente_id' => $paciente_id,
                    );
        
        $this->db->select('c.id, diagnostico_id, DATE(fecha_consulta) AS fecha, '
                . 'cie.codigo, motivo, enfermedad_actual, tratamiento, '
                . 'GROUP_CONCAT(cie.descripcion SEPARATOR "<br>") as cie_descripcion, '
                . 'GROUP_CONCAT(cd.descripcion SEPARATOR "<br>") as cd_descripcion');
        $this->db->from('consulta as c');
        $this->db->join('consulta_diagnostico as cd', 'c.id = cd.consulta_id', 'left');
        $this->db->join('cnf_cie10 as cie', 'cd.diagnostico_id = cie.id', 'left');
        $this->db->where($condicion);
        $this->db->group_by("fecha", "desc");
        $this->db->order_by("fecha", "desc");          
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }

    public function set_consulta($id, $tabla=""){
        $consulta_id = $this->input->post('consulta_id');
        $campo_id = $this->input->post('campo');
        $valor = $this->input->post('valor');
        
        $sql = "INSERT INTO $tabla($id, $campo_id)
                VALUES (?, ?)
                ON DUPLICATE KEY UPDATE 
                    $campo_id = VALUES($campo_id)";

        $this->db->query($sql, array( $consulta_id, $valor)); 
        
        print $this->db->last_query();
    }
    
    public function set_antecedente($id, $tabla=""){
        $paciente_id = $this->input->post('paciente_id');
        $campo_id = $this->input->post('campo');
        $valor = $this->input->post('valor');
        
        $sql = "INSERT INTO $tabla($id, $campo_id)
                VALUES (?, ?)
                ON DUPLICATE KEY UPDATE 
                    $campo_id = VALUES($campo_id)";

        $this->db->query($sql, array( $paciente_id, $valor)); 
        
        //print $this->db->last_query();
    }
    
    public function set_interconsulta()
    {
        $consulta_id = $this->input->post('consulta_id');
        $especialidad_id = $this->input->post('especialidad_id');
        $descripcion = $this->input->post('descripcion');
        
        $sql = "INSERT INTO consulta_interconsulta(consulta_id, especialidad_id, descripcion)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    descripcion = VALUES(descripcion)";

        $this->db->query($sql, array( $consulta_id, $especialidad_id, $descripcion)); 
        //print $this->db->last_query();
    }
    
    public function del_interconsulta()
    {
        $consulta_id = $this->input->post('consulta_id');
        $especialidad_id = $this->input->post('especialidad_id');
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'especialidad_id' => $especialidad_id
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('consulta_interconsulta');
    }
    
    public function set_revisionSistema()
    {
        $consulta_id = $this->input->post('consulta_id');
        $sistema_id = $this->input->post('sistema_id');
        $valor = $this->input->post('valor');
        
        $sql = "INSERT INTO consulta_sistema(consulta_id, sistema_id, valoracion)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    valoracion = VALUES(valoracion)";

        $this->db->query($sql, array( $consulta_id, $sistema_id, $valor)); 
        //print $this->db->last_query();
    }
    
    public function set_revisionFisica()
    {
        $consulta_id = $this->input->post('consulta_id');
        $parte_cuerpo_id = $this->input->post('parte_cuerpo_id');
        $valor = $this->input->post('valor');
        
        $sql = "INSERT INTO consulta_parte_cuerpo(consulta_id, parte_cuerpo_id, valoracion)
                VALUES (?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    valoracion = VALUES(valoracion)";

        $this->db->query($sql, array( $consulta_id, $parte_cuerpo_id, $valor)); 
        //print $this->db->last_query();
    }
    
    
    public function set_cerrarConsulta()
    {
        $consulta_id = $this->input->post('consulta_id');
        
        $sql = "INSERT INTO consulta(id, consulta_activa)
                VALUES (?, ?)
                ON DUPLICATE KEY UPDATE 
                    consulta_activa = VALUES(consulta_activa)";

        $this->db->query($sql, array( $consulta_id, 'False')); 
        
        $condicion = array( 'id' => $consulta_id );
        $data = array( 'estado_cita_id' => '2' );

        $this->db->where($condicion);
        $this->db->update('citas' ,$data);
        
        //print $this->db->last_query();
    }
    
    public function set_diagnostico()
    {
        $consulta_id = $this->input->post('consulta_id');
        $diagnostico_id = $this->input->post('diagnostico_id');
        $descripcion = $this->input->post('descripcion');
        $tipo_diagnostico = $this->input->post('tipo_diagnostico');
        
        $sql = "INSERT INTO consulta_diagnostico(consulta_id, diagnostico_id, descripcion, tipo_diagnostico_id)
                VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    descripcion = VALUES(descripcion),
                    tipo_diagnostico_id = VALUES(tipo_diagnostico_id)";

        $this->db->query($sql, array( $consulta_id, $diagnostico_id, $descripcion, $tipo_diagnostico)); 
    }
    
    public function del_diagnostico()
    {
        $consulta_id = $this->input->post('consulta_id');
        $diagnostico_id = $this->input->post('diagnostico_id');
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'diagnostico_id' => $diagnostico_id
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('consulta_diagnostico');
    }
    
     public function set_procedimiento()
    {
        $consulta_id = $this->input->post('consulta_id');
        $procedimiento_id = $this->input->post('procedimiento_id');
        $observacion = $this->input->post('observacion');
        
        $sql = "INSERT INTO consulta_procedimiento(consulta_id, procedimiento_id, observacion)
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
        return $this->db->delete('consulta_procedimiento');
    }
    
    
    public function get_medicacion($consulta_id=0)
    {
        $condicion = array(
                        'consulta_id' => $consulta_id,
                    );
        
        $this->db->select('consulta_id, medicamento_id, medicamento, presentacion, cantidad, posologia');
        $this->db->from('consulta_medicamentos');
        $this->db->where($condicion);
        $query = $this->db->get();
        //print $this->db->last_query();
        return $query->result_array();
        
    }
    
    public function set_medicacion()
    {
        $consulta_id = $this->input->post('consulta_id');
        $medicamento = $this->input->post('medicamento');
        $presentacion = $this->input->post('presentacion');
        $posologia = $this->input->post('posologia');
        $cantidad = $this->input->post('cantidad');
        
        $sql = "INSERT INTO consulta_medicamentos(consulta_id, medicamento, presentacion, posologia, cantidad)
                VALUES (?, ?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE 
                    medicamento = VALUES(medicamento),
                    presentacion = VALUES(presentacion),
                    posologia = VALUES(posologia),
                    cantidad = VALUES(cantidad)";

        $this->db->query($sql, array( $consulta_id, $medicamento, $presentacion, $posologia, $cantidad)); 
    }
    
    public function del_medicacion()
    {
        $consulta_id = $this->input->post('consulta_id');
        $medicamento_id = $this->input->post('medicamento_id');
        
        $condicion = array(
                        'consulta_id' => $consulta_id,
                        'medicamento_id' => $medicamento_id
                    );
        
        $this->db->where($condicion);
        return $this->db->delete('consulta_medicamentos');
    }
    
}