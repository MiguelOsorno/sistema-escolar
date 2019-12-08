<?php
class consultarCalificacion_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function getCalificaciones(){
                $id = $this->input->post('id');
                
               
                $sql = "SELECT  
                calificacion.valor,
                calificacion.estado,
                maestro.nombre as maestro_nombre, 
                materia.nombre as materia_nombre, 
                alumno.nombre as alumno_nombre,
                alumno.apellido
                FROM (((calificacion
                INNER JOIN alumno ON calificacion.id_alumno = alumno.id) 
                INNER JOIN materia ON calificacion.id_materia = materia.id)
                INNER JOIN maestro ON calificacion.id_maestro = maestro.id)
                WHERE Calificacion.id_alumno = ?";
                
                $query = $this->db->query($sql, array($id));

                return $query->result_array();
        }
}