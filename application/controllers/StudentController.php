<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public $students = [
        [
            "id" => 1,
            'name' => 'prince ojoi'
        ],
        [
            "id" => 2,
            'name' => 'mercy'
        ],
        [
            "id" => 3,
            'name' => 'melvin'
        ]
    ];
}

 //test
 public function student_data()
 {
     $class = $this->load_class();
     $data = [
         'name' => 'Prince',
         'sex' => 'male',
         'department' => 'computer science',
         'class' => $class,
     ];

     return $data;
 }
 private function load_class()
 {
     return "300L";
 }

