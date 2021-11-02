<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Student\StudentModel;
use MVC\Models\Student\StudentRepository;

class StudentsController extends Controller
{
    public function index()
    {
        $studentRepo = new StudentRepository();
        $student = new StudentModel();

        $d['students'] = $studentRepo->getall();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        $studentRepo = new StudentRepository();
        $student = new StudentModel();
        if (isset($_POST["name"])) {
            $student->setName($_POST["name"]);
            if($_POST['gender']=='Male'){
                $student->setGender(1);
            }else{
                $student->setGender(2);
            }
            if ($studentRepo->save($student)) {
                header("Location: " . WEBROOT . "students/index");
            }
        }


        $this->render("create");
    }

    function edit($id)
    {
        $studentRepo = new StudentRepository();
        $student = new StudentModel();

        $d["student"] = $studentRepo->getId($id);

        if (isset($_POST["name"])) {

            $student->setName($_POST["name"]);
            if($_POST['gender']=='Male'){
                $student->setGender(1);
            }else{
                $student->setGender(2);
            }
            $student->setId($id);
            $studentRepo->save($student);

            if ($studentRepo->save($student)) {
                header("Location: " . WEBROOT . "students/index");
            }
        }

        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $studentRepo = new StudentRepository();

        if ($studentRepo->delete($id)) {
            header("Location: " . WEBROOT . "students/index");
        }
    }
}