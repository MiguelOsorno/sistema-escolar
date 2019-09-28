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

        public function edit($id) {
                $data['maestro'] = $this->maestro_model->get_singleMaestro($id);

                $data['title'] = 'Editar maestro';

                $this->load->view('templates/header', $data);
                $this->load->view('maestro/edit', $data);
                $this->load->view('templates/footer');
        }
}