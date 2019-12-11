<?php
class Carrera_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('carrera_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['carreras']= $this->carrera_model->get_carreras();
                $data['title'] = 'Modulo Carreras';

                $this->load->view('templates/header', $data);
                $this->load->view('carrera/index');
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nueva carrera';

                $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                
                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('carrera/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->carrera_model->set_carrera();
                        $this->load->view('carrera/success');
                }
        }

        public function edit($id) 
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Editar';

                $this->form_validation->set_rules('nombre', 'Nombre', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $data['carrera'] = $this->carrera_model->get_singleCarrera($id);
                        $this->load->view('templates/header');
                        $this->load->view('carrera/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->carrera_model->update_carrera();
                        
                        $this->load->view('carrera/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->carrera_model->delete_carrera($id);
                redirect("carrera/");
	}
           
}