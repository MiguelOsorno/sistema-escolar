<?php
class Grupo_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('grupo_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['grupos']= $this->grupo_model->get_grupos();
                $data['title'] = 'Modulo Grupos';

                $this->load->view('templates/header', $data);
                $this->load->view('grupo/index');
                $this->load->view('templates/footer');
        }

        public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Nuevo grupo';

                $this->form_validation->set_rules('grado', 'Gombre', 'required');
                $this->form_validation->set_rules('letra', 'Letra', 'required');
                $this->form_validation->set_rules('turno', 'Turno', 'required');
                $this->form_validation->set_rules('carrera', 'Carrera', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('grupo/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->grupo_model->set_grupo();
                        $this->load->view('grupo/success');
                }
        }

        public function edit($id) 
        {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Editar';

                $this->form_validation->set_rules('grado', 'Gombre', 'required');
                $this->form_validation->set_rules('letra', 'Letra', 'required');
                $this->form_validation->set_rules('turno', 'Turno', 'required');
                $this->form_validation->set_rules('carrera', 'Carrera', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $data['grupo'] = $this->grupo_model->get_singleGrupo($id);
                        $this->load->view('templates/header');
                        $this->load->view('grupo/edit', $data);
                        $this->load->view('templates/footer');
                }
                else
                {
                        $data = $this->grupo_model->update_grupo();
                        
                        $this->load->view('grupo/success');
                }
        }

        public function delete($id)
	{
                
                
                $this->grupo_model->delete_grupo($id);
                redirect("grupo/");
	}
           
}