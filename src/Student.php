<?php

namespace StudentManage;

class Student
{
    private $id;
    private $name;
    private $courses;
    private $email;
    

    public function __construct($id, $name, $email, $courses = []) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCourses(){
        return $this->courses;
    }
}