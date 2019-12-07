<?php
class Carrera_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_carreras()
        {
                $query = $this->db->get('carrera');
                return $query->result_array();
        }

        public function get_singleCarrera($id)
        {
               
               $query = $this->db->get_where('carrera', array('id' => $id));
               return $query->row_array();
        }

        public function set_carrera()
        {
                $data = array(
                        'id'=>$this->input->post('id'),
                        'nombre' => $this->input->post('nombre')
                );
                 return $this->db->insert('carrera', $data); 
        }

        public function update_carrera()
        {
                $id= $this->input->post("id");
                $data = array(
                        'nombre' => $this->input->post('nombre')
                );
                
                return $this->db->update('carrera', $data, array('id' => $id));
        }


        public function delete_carrera($id)
        {
              return $this->db->delete('carrera', array('id' => $id)); 
        }

        
}