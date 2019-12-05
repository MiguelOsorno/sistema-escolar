<?php
class Alumno_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_alumnos()
        {
                $query = $this->db->get('alumno');
                return $query->result_array();
        }

        public function get_singleAlumno($id)
        {
               
               $query = $this->db->get_where('alumno', array('id' => $id));
               return $query->row_array();
        }

        public function set_alumno()
        {
                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'id_grupo' =>$this->input->post('id_grupo')
                );
                 return $this->db->insert('alumno', $data); 
        }

        public function update_alumno()
        {
                $id= $this->input->post("id");
                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'id_grupo' =>$this->post->post('id_grupo')
                );
                
                return $this->db->update('alumno', $data, array('id' => $id));
        }


        public function delete_alumno($id)
        {
              return $this->db->delete('alumno', array('id' => $id)); 
        }

        
}