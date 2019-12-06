<?php
class Clase_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_clases()
        {
                $query = $this->db->get('clase');
                return $query->result_array();
        }

        public function get_singleClase($id)
        {
               
               $query = $this->db->get_where('clase', array('id' => $id));
               return $query->row_array();
        }

        public function set_clase()
        {
                $data = array(
                        'id_grupo' => $this->input->post('id_grupo'),
                        'id_materia' => $this->input->post('id_materia'),
                        'horario' =>$this->input->post('horario'),
                        'id_maestro'=>$this->input->post('id_maestro')
                );
                 return $this->db->insert('clase', $data); 
        }

        public function update_clase()
        {
                $id= $this->input->post("id");
                $data = array(
                    'id_grupo' => $this->input->post('id_grupo'),
                    'id_materia' => $this->input->post('id_materia'),
                    'horario' =>$this->input->post('horario'),
                    'id_maestro'=>$this->input->post('id_maestro')
                );
                
                return $this->db->update('clase', $data, array('id' => $id));
        }


        public function delete_clase($id)
        {
              return $this->db->delete('clase', array('id' => $id)); 
        }

        
}