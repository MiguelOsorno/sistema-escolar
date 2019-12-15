<?php
class Calificacion_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_calificaciones()
    {

        $sql = "SELECT
                materia.nombre as materia_nombre,
                maestro.nombre as maestro_nombre,
                alumno.nombre as alumno_nombre,
                alumno.apellido as alumno_apellido,
                calificacion.valor,
                calificacion.estado,
                calificacion.id,
                cuatrimestre.descripcion
                FROM ((((calificacion
                INNER JOIN cuatrimestre ON calificacion.id_cuatrimestre = cuatrimestre.id)
                INNER JOIN maestro ON calificacion.id_maestro= maestro.id)
                INNER JOIN alumno ON calificacion.id_alumno = alumno.id)
                INNER JOIN materia ON calificacion.id_materia = materia.id) ORDER BY calificacion.id asc";

        $query = $this->db->query($sql);

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
            'id_materia' => $_REQUEST['id_materia'],
            'id_maestro' => $_REQUEST['id_maestro'],
            'id_alumno' => $_REQUEST['id_alumno'],
            'valor' => $this->input->post('valor'),
            'estado' => $_REQUEST['estado'],
            'id_cuatrimestre' => $_REQUEST['cuatrimestre'],
        );
        return $this->db->insert('calificacion', $data);
    }

    public function update_calificacion()
    {
        $id = $this->input->post("id");
        $data = array(
            'id_materia' => $this->input->post('id_materia'),
            'id_alumno' => $this->input->post('id_alumno'),
            'id_maestro' => $this->input->post('id_maestro'),
            'valor' => $this->input->post('valor'),
            'estado' => $this->input->post('estado'),
        );

        return $this->db->update('calificacion', $data, array('id' => $id));
    }

    public function delete_calificacion($id)
    {
        return $this->db->delete('calificacion', array('id' => $id));
    }

}
