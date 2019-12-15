<?php
class Clase_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_clases()
    {

        $sql = "SELECT
                clase.id,
                materia.nombre as materia_nombre,
                grupo.letra,
                carrera.nombre as carrera_nombre,
                clase.horario,
                maestro.nombre as maestro_nombre,
                cuatrimestre.descripcion
                FROM (((((clase
                INNER JOIN materia ON clase.id_materia = materia.id)
                INNER JOIN maestro ON clase.id_maestro = maestro.id)
                INNER JOIN grupo ON clase.id_grupo= grupo.id)
                INNER JOIN cuatrimestre ON clase.id_cuatrimestre = cuatrimestre.id)
                INNER JOIN carrera ON grupo.id_carrera = carrera.id) ORDER BY clase.id asc";

        $query = $this->db->query($sql);

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
            'id_grupo' => $_REQUEST['id_grupo'],
            'id_materia' => $_REQUEST['id_materia'],
            'horario' => $this->input->post('horario'),
            'id_maestro' => $_REQUEST['id_maestro'],
            'id_cuatrimestre' => $_REQUEST['cuatrimestre'],

        );
        return $this->db->insert('clase', $data);
    }

    public function update_clase()
    {
        $id = $this->input->post("id");
        $data = array(
            'id_grupo' => $this->input->post('id_grupo'),
            'id_materia' => $this->input->post('id_materia'),
            'horario' => $this->input->post('horario'),
            'id_maestro' => $this->input->post('id_maestro'),
        );

        return $this->db->update('clase', $data, array('id' => $id));
    }

    public function delete_clase($id)
    {
        return $this->db->delete('clase', array('id' => $id));
    }

}
