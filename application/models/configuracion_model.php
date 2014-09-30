<?php
class Configuracion_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_grupo_sanguineo()
    {
        $query = $this->db->get('cnf_grupo_sanguineo');
        return $query->result_array();
    }

    public function get_tipo_documento()
    {
        $query = $this->db->get('cnf_tipo_documento');
        return $query->result_array();
    }

    public function get_anestesia_tipo()
    {
        $this->db->from('cnf_anestesia_tipo');
        $this->db->order_by("cnf_anestesia_tipo.id", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_tipo_documento_quirurgico($rol_id)
    {
        $query = $this->db->get_where('cnf_tipo_documento_quirurgico', array('rol_id' => $rol_id));
        //$query = $this->db->get('cnf_tipo_documento_quirurgico');
        //print $this->db->last_query();
        return $query->result_array();
    }

    public function get_departamento()
    {
        $query = $this->db->get('cnf_departamento');
        return $query->result_array();
    }

    public function get_municipio()
    {
        $this->db->from('cnf_municipio');
        $this->db->order_by("descripcion", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_municipio_id($depto_id)
    {
        $this->db->order_by("descripcion", "asc");
        $query = $this->db->get_where('cnf_municipio', array('dpto_id' => $depto_id));
        
        return $query->result_array();
    }

    public function get_estado_civil()
    {
        $query = $this->db->get('cnf_estado_civil');
        return $query->result_array();
    }
    
    public function get_parentesco()
    {
        $query = $this->db->get('cnf_parentesco');
        return $query->result_array();
    }
    
    public function get_especialidades()
    {
        $query = $this->db->get('cnf_especialidades');
        return $query->result_array();
    }
    
    // TABLAS GENERALES DE CONSULTA
    public function get_partesCuerpo()
    {
        $query = $this->db->get('cnf_parte_cuerpo');
        return $query->result_array();
    }
    
    public function get_sistema()
    {
        $query = $this->db->get('cnf_sistema');
        return $query->result_array();
    }
    
    public function get_sistemaGineco()
    {
        $query = $this->db->get('cnf_sistema_gineco');
        return $query->result_array();
    }
    
    public function get_finalidadConsulta()
    {
        $query = $this->db->get('cnf_finalidad_consulta');
        return $query->result_array();
    }
    
    public function get_tipoDiagnostico()
    {
        $query = $this->db->get('cnf_tipo_diagnostico');
        return $query->result_array();
    }
    
    public function get_causaExterna()
    {
        $query = $this->db->get('cnf_causa_externa');
        return $query->result_array();
    }
    
    public function get_consultaTipo()
    {
        $query = $this->db->get('cnf_consulta_tipo');
        return $query->result_array();
    }
        
    public function get_conceptoServicio()
    {
        $query = $this->db->get('cnf_concepto_servicio');
        return $query->result_array();
    }
    
    public function get_conceptoServicioTipo($concepto_servicio_id)
    {
        $this->db->order_by("id", "asc");
        $query = $this->db->get_where('cnf_concepto_servicio_tipo', array('concepto_servicio_id' => $concepto_servicio_id));
        //print $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_cie10($options = array())
    {
        $this->db->select('id, codigo, descripcion');
        $this->db->from('cnf_cie10');
        $this->db->like('descripcion', $options['keyword']);
        $this->db->or_like('codigo', $options['keyword']);
        $this->db->order_by('descripcion', $options['keyword']);
        $this->db->limit(10, 0);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_cups($options = array())
    {
        $this->db->select('id, codigo, descripcion');
        $this->db->from('cnf_cups');
        $this->db->like('descripcion', $options['keyword']);
        $this->db->or_like('codigo', $options['keyword']);
        $this->db->order_by('descripcion', $options['keyword']);
        $this->db->limit(10, 0);
        $query = $this->db->get();
        return $query->result();
    }
}