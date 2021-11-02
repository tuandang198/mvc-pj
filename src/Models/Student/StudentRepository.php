<?php

namespace MVC\Models\Student;

use MVC\Models\Student\StudentResourceModel;

class StudentRepository
{
    protected $studentResourceModel;

    public function __construct()
    {
        $this->studentResourceModel = new StudentResourceModel();
    }

    public function getAll(){
        return $this->studentResourceModel->getAll();
    }

    public function getId($id)
    {
        return $this->studentResourceModel->getId($id);
    }

    public function delete($id)
    {
        return $this->studentResourceModel->delete($id);
    }

    public function save($model)
    {
        return $this->studentResourceModel->save($model);
    }
}