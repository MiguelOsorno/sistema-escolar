<?php
class Maestro_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('maestro_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['maestro'] = $this->maestro_model->get_maestros();

                $data['title'] = 'Maestros';

                $this->load->view('templates/header', $data);
                $this->load->view('maestro/index', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nuevo maestro';

                $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('maestro/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->maestro_model->set_maestro();
                        $this->load->view('maestro/success');
                }
        }

        public function edit($id) 
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Editar';

                $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $data['maestro'] = $this->maestro_model->get_singleMaestro($id);
                        $this->load->view('templates/header');
                        $this->load->view('maestro/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->maestro_model->update_maestro();
                        
                        $this->load->view('maestro/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->maestro_model->delete_maestro($id);
                redirect("maestro/");
	}


      
}