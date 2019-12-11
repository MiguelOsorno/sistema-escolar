<?php
class Alumno_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_alumnos()
        {
                $sql = "SELECT  
                alumno.id,
                alumno.nombre,
                alumno.apellido,
                cuatrimestre.descripcion 
                FROM (alumno
                INNER JOIN cuatrimestre ON alumno.id_cuatrimestre = cuatrimestre.id)";
                
                $query = $this->db->query($sql);

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
                        'id'=>$this->input->post('id'),
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'id_cuatrimestre' => $_REQUEST['cuatrimestre'] 
                );
                 return $this->db->insert('alumno', $data); 
        }

        public function update_alumno()
        {
                $id= $this->input->post("id");
                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'id_cuatrimestre' => $_REQUEST['cuatrimestre']
                );
                
                return $this->db->update('alumno', $data, array('id' => $id));
        }


        public function delete_alumno($id)
        {
              return $this->db->delete('alumno', array('id' => $id)); 
        }

        
}