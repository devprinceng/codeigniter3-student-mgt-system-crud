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
        $this->load->view('partials/head');
        $this->load->view('students/index', ['students' => $students]);
        $this->load->view('partials/footer');
    }
}



