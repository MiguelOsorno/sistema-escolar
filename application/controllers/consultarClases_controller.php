<?php
class ConsultarClases_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('consultarClases_model');
        $this->load->model('grupo_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['title'] = 'Mas opciones';

        $this->load->view('templates/header', $data);
        $this->load->view('consultarClases/index');
        $this->load->view('templates/footer');
    }

    public function formulario()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Consulta Horario';

        $this->form_validation->set_rules('id_grupo', 'Grupo', 'required');

        $data['grupos'] = $this->grupo_model->get_grupos();

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('consultarClases/formulario', $data);
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'Horario';
            $data['clases'] = $this->consultarClases_model->getHorario();
            $this->load->view('consultarClases/horario', $data);
        }

    }

}
