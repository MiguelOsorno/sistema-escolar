<?php
class Grupo_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_grupos()
        {
                $query = $this->db->get('grupo');
                return $query->result_array();
        }

        public function get_singleGrupo($id)
        {
               
               $query = $this->db->get_where('grupo', array('id' => $id));
               return $query->row_array();
        }

        public function set_grupo()
        {
                $data = array(
                        'id'=>$this->input->post('id'),
                        'letra' => $this->input->post('letra'),
                        'turno' => $this->input->post('turno'),
                        'id_carrera' => $this->input->post('id_carrera')
                );
                 return $this->db->insert('grupo', $data);
        }

        public function update_grupo()
        {
                $id= $this->input->post("id");
                $data = array(
                      
                       'letra' => $this->input->post('letra'),
                       'turno' => $this->input->post('turno'), 
                       'id_carrera' => $this->input->post('id_carrera')
                );
                
                return $this->db->update('grupo', $data, array('id' => $id));
        }


        public function delete_grupo($id)
        {
              return $this->db->delete('grupo', array('id' => $id)); 
        }

        
}