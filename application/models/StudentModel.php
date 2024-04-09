<?php

class StudentModel extends CI_Model
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

    // added method to return students from our students array
    public function getStudents()
    {
        return $this->students;
    }

    // get one student
    public function getStudent($id)
    {
        if ($id != null) {
            foreach ($this->students as $student) {
                if ($student['id'] == $id)
                    return $student;
            }
        }
        return [];
    }
}