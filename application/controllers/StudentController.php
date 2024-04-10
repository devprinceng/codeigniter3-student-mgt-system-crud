<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load the model
        $this->load->model('StudentModel', 'stdm');
    }
    public function index($id = null)
    {
        if ($id) {
            $this->show($id);
        }
        //get students data
        $students = $this->stdm->getStudents();
        $this->loadview("Students", 'students/index', ['students' => $students]);
    }

    public function show($id)
    {
        $student = $this->stdm->getStudent($id);
        $this->loadview('student', 'students/index', ['student' => $student]);
    }

    public function loadview($title, $view, array $data = [])
    {
        $this->load->view('partials/head', ['title' => $title]);
        $this->load->view($view, $data);
        $this->load->view('partials/footer');
    }

    public function add()
    {
        $this->loadview("Add Students", "students/add");
    }
}
