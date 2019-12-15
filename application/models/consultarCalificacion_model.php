<?php
class consultarCalificacion_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function getCalificaciones()
    {
        $matricula = $_REQUEST['matricula'];

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

                WHERE alumno.matricula = ?";

        $query = $this->db->query($sql, array($matricula));

        return $query->result_array();
    }
}
