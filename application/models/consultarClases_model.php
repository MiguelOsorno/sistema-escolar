<?php
class ConsultarClases_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getHorario()
    {
        $grupo = $_REQUEST['id_grupo'];
        $cuatrimestre = $_REQUEST['cuatrimestre'];

        $sql = "SELECT
                clase.id,
                clase.horario,
                maestro.nombre as maestro_nombre,
                materia.nombre as materia_nombre,
                grupo.letra,
                carrera.nombre as carrera_nombre,
                cuatrimestre.descripcion
                FROM (((((clase
                INNER JOIN materia ON clase.id_materia = materia.id)
                INNER JOIN maestro ON clase.id_maestro = maestro.id)
                INNER JOIN grupo ON clase.id_grupo= grupo.id)
                INNER JOIN cuatrimestre ON clase.id_cuatrimestre = cuatrimestre.id)
                INNER JOIN carrera ON grupo.id_carrera = carrera.id)
                WHERE clase.id_grupo = ? AND clase.id_cuatrimestre = ?
                ORDER BY clase.id asc";

        $query = $this->db->query($sql, array($grupo, $cuatrimestre));

        return $query->result_array();
    }
}
