<?php
class Alumno_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_alumnos()
    {
        $sql = "SELECT
        alumno.id,
        alumno.matricula,
        alumno.nombre,
        alumno.apellido,
        grupo.letra,
        cuatrimestre.descripcion,
        alumno.sexo
        FROM ((alumno
        INNER JOIN cuatrimestre ON alumno.id_cuatrimestre = cuatrimestre.id)
        INNER JOIN grupo ON alumno.id_grupo = grupo.id) ORDER BY alumno.id ";

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
            'matricula' => $this->input->post('matricula'),
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'id_grupo' => $_REQUEST['id_grupo'],
            'id_cuatrimestre' => $_REQUEST['cuatrimestre'],
            'sexo' => $_REQUEST['sexo'],
        );
        return $this->db->insert('alumno', $data);
    }

    public function update_alumno()
    {
        $id = $this->input->post("id");
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'id_cuatrimestre' => $_REQUEST['cuatrimestre'],
        );

        return $this->db->update('alumno', $data, array('id' => $id));
    }

    public function delete_alumno($id)
    {
        return $this->db->delete('alumno', array('id' => $id));
    }

}
