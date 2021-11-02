<?php

namespace MVC\Models\Student;

use MVC\Core\ResourceModel;
use MVC\Models\Student\StudentModel;

class StudentResourceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init("student","id",new StudentModel());
    }
}