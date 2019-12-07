<?php
class Clase_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('clase_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['clases']= $this->clase_model->get_clases();
                $data['title'] = 'Modulo clases';

                $this->load->view('templates/header', $data);
                $this->load->view('clase/index');
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nueva Clase';

                $this->form_validation->set_rules('id_grupo', 'Id_grupo', 'required');
                $this->form_validation->set_rules('id_materia', 'Id_materia', 'required');
                $this->form_validation->set_rules('horario', 'Horario', 'required');
                $this->form_validation->set_rules('id_maestro','Id_maestro','required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('clase/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->clase_model->set_clase();
                        $this->load->view('clase/success');
                }
        }

        public function edit($id) 
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Editar';

                $this->form_validation->set_rules('id_grupo', 'Id_grupo', 'required');
                $this->form_validation->set_rules('id_materia', 'Id_materia', 'required');
                $this->form_validation->set_rules('horario', 'Horario', 'required');
                $this->form_validation->set_rules('id_maestro','Id_maestro','required');

                if ($this->form_validation->run() === FALSE)
                {
                        $data['clase'] = $this->clase_model->get_singleClase($id);
                        $this->load->view('templates/header');
                        $this->load->view('clase/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->clase_model->update_clase();
                        
                        $this->load->view('clase/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->clase_model->delete_clase($id);
                redirect("clase/");
	}
           
}