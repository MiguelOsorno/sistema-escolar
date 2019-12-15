<?php
class Calificacion_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('calificacion_model');
        $this->load->model('materia_model');
        $this->load->model('maestro_model');
        $this->load->model('alumno_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['calificaciones'] = $this->calificacion_model->get_calificaciones();
        $data['title'] = 'Modulo Calificaciones';

        $this->load->view('templates/header', $data);
        $this->load->view('calificacion/index');
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Nueva Calificacion';

        $this->form_validation->set_rules('valor', 'Valor', 'required');

        $data['materias'] = $this->materia_model->get_materias();
        $data['maestros'] = $this->maestro_model->get_maestros();
        $data['alumnos'] = $this->alumno_model->get_alumnos();

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $data);
            $this->load->view('calificacion/create', $data);
            $this->load->view('templates/footer');

        } else {
            $this->calificacion_model->set_calificacion();
            $this->load->view('calificacion/success');
        }
    }

    public function edit($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Editar';

        $this->form_validation->set_rules('id_materia', 'Id_materia', 'required');
        $this->form_validation->set_rules('id_alumno', 'Id_alumno', 'required');
        $this->form_validation->set_rules('id_maestro', 'Id_maestro', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required');
        $this->form_validation->set_rules('estado', 'Estado', 'required');

        if ($this->form_validation->run() === false) {
            $data['calificacion'] = $this->calificacion_model->get_singleCalificacion($id);
            $this->load->view('templates/header');
            $this->load->view('calificacion/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = $this->calificacion_model->update_calificacion();

            $this->load->view('calificacion/success');
        }
    }

    public function delete($id)
    {
        $this->calificacion_model->delete_calificacion($id);
        redirect("calificacion/");
    }

}
