<?php
class Grupo_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_grupos()
    {

        $sql = "SELECT
                grupo.id,
                grupo.letra,
                grupo.modalidad,
                carrera.nombre,
                grupo.cicloEscolar
                FROM (grupo
                INNER JOIN carrera ON grupo.id_carrera = carrera.id)";

        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function get_singleGrupo($id)
    {

        $query = $this->db->get_where('grupo', array('id' => $id));
        return $query->row_array();
    }

    public function set_grupo()
    {
        $data = array(
            'letra' => $this->input->post('letra'),
            'modalidad' => $_REQUEST['modalidad'],
            'id_carrera' => $_REQUEST['carrera'],
            'cicloEscolar' => $this->input->post('cicloEscolar'),
        );
        return $this->db->insert('grupo', $data);
    }

    public function update_grupo()
    {
        $id = $this->input->post("id");
        $data = array(

            'letra' => $this->input->post('letra'),
            'turno' => $_REQUEST['turno'],
        );

        return $this->db->update('grupo', $data, array('id' => $id));
    }

    public function delete_grupo($id)
    {
        return $this->db->delete('grupo', array('id' => $id));
    }

}
