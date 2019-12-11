<?php
class Materia_controller extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('materia_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['materias']= $this->materia_model->get_materias();
                $data['title'] = 'Modulo Materias';

                $this->load->view('templates/header', $data);
                $this->load->view('materia/index');
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nueva Materia';

                $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                
                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('materia/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->materia_model->set_materia();
                        $this->load->view('materia/success');
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
                        $data['materia'] = $this->materia_model->get_singleMateria($id);
                        $this->load->view('templates/header');
                        $this->load->view('materia/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->materia_model->update_materia();
                        
                        $this->load->view('materia/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->materia_model->delete_materia($id);
                redirect("materia/");
	}
           
           
}