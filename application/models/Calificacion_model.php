<?php
class Calificacion_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_calificaciones()
        {
                $query = $this->db->get('calificacion');
                return $query->result_array();
        }

        public function get_singleCalificacion($id)
        {
               
               $query = $this->db->get_where('calificacion', array('id' => $id));
               return $query->row_array();
        }

        public function set_calificacion()
        {
                $data = array(
                        'id'=>$this->input->post('id'),
                        'id_materia' => $this->input->post('id_materia'),
                        'id_alumno' => $this->input->post('id_alumno'),
                        'id_maestro'=> $this->input->post('id_maestro'),
                        'valor' =>$this->input->post('valor'),
                        'estado' =>$this->input->post('estado')
                );
                 return $this->db->insert('calificacion', $data); 
        }

        public function update_calificacion()
        {
                $id= $this->input->post("id");
                $data = array(
                        'id_materia' => $this->input->post('id_materia'),
                        'id_alumno' => $this->input->post('id_alumno'),
                        'id_maestro'=> $this->input->post('id_maestro'),
                        'valor' =>$this->input->post('valor'),
                        'estado'=>$this->input->post('estado')
                );
                
                return $this->db->update('calificacion', $data, array('id' => $id));
        }


        public function delete_calificacion($id)
        {
              return $this->db->delete('calificacion', array('id' => $id)); 
        }

        
}