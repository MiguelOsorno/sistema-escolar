<?php
class Materia_controller extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                
                $this->load->helper('url_helper');
        }

        public function index()
        {
              

                $data['title'] = 'Home';

                $this->load->view('templates/header', $data);
                $this->load->view('materia/index');
                $this->load->view('templates/footer');
        }
           
}