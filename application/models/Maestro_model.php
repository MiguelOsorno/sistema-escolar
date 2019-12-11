<?php
class Maestro_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_maestros()
        {
                $query = $this->db->get('maestro');
                return $query->result_array();
        }

        public function get_singleMaestro($id)
        {
               
               $query = $this->db->get_where('maestro', array('id' => $id));
               return $query->row_array();
        }

        public function set_maestro()
        {
                $data = array(
                        'id'=>$this->input->post('id'),
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'direccion'=>$this->input->post('direccion'),
                        'telefono'=>$this->input->post('telefono')
                );
                 return $this->db->insert('maestro', $data); 
        }

        public function update_maestro()
        {
                $id= $this->input->post("id");
                $data = array(
                        'nombre' => $this->input->post('nombre'),
                        'apellido' => $this->input->post('apellido'),
                        'direccion'=>$this->input->post('direccion'),
                        'telefono'=>$this->input->post('telefono')
                );
                
                return $this->db->update('maestro', $data, array('id' => $id));
        }


        public function delete_maestro($id)
        {
              return $this->db->delete('maestro', array('id' => $id)); 
        }

        
}