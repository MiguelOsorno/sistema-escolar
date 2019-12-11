<?php
class Alumno_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('alumno_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['alumnos']= $this->alumno_model->get_alumnos();
                $data['title'] = 'Modulo Alumnos';

                $this->load->view('templates/header', $data);
                $this->load->view('alumno/index');
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nuevo Alumno';

                $this->form_validation->set_rules('id', 'Id', 'required');
                $this->form_validation->set_rules('nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required');
               

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('alumno/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->alumno_model->set_alumno();
                        $this->load->view('alumno/success');
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
                        $data['alumno'] = $this->alumno_model->get_singleAlumno($id);
                        $this->load->view('templates/header');
                        $this->load->view('alumno/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->alumno_model->update_alumno();
                        
                        $this->load->view('alumno/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->alumno_model->delete_alumno($id);
                redirect("alumno/");
	}
           
}