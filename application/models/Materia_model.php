<?php
class Materia_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_materias()
        {
                $query = $this->db->get('materia');
                return $query->result_array();
        }

        public function get_singleMateria($id)
        {
               
               $query = $this->db->get_where('materia', array('id' => $id));
               return $query->row_array();
        }

        public function set_materia()
        {
                $data = array(
                        'nombre' => $this->input->post('nombre')
                      
                );
                 return $this->db->insert('materia', $data); 
        }

        public function update_materia()
        {
                $id= $this->input->post("id");
                $data = array(
                        'nombre' => $this->input->post('nombre')
                );
                
                return $this->db->update('materia', $data, array('id' => $id));
        }


        public function delete_materia($id)
        {
              return $this->db->delete('materia', array('id' => $id)); 
        }

        
}