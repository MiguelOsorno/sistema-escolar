<?php
class ConsultarCalificacion_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('consultarCalificacion_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['title'] = 'Mas opciones';

                $this->load->view('templates/header', $data);
                $this->load->view('consultarCalificacion/index');
                $this->load->view('templates/footer');
        }

        public function formulario()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data['title'] = 'Consulta de calificacion';

                $this->form_validation->set_rules('id', 'Id', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('consultarCalificacion/formulario');
                        $this->load->view('templates/footer');

                }
                else
                {
                        
                        $this->load->view('consultarCalificacion/consulta');
                }

                
        }
}