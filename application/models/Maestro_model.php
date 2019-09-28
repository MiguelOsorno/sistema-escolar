<?php
class Maestro_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_maestros()
        {
                $query = $this->db->get('maestro');
                return $query->result_array();
        }

        public function get_singleMaestro($id)
        {
               
               $query = $this->db->get_where('maestro', array('id' => $id));
               return $query->row_array();
        }
}