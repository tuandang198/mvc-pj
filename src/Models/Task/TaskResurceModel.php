<?php

namespace MVC\Models\Task;

use MVC\Core\ResourceModel;


class TaskResurceModel extends ResourceModel
{
    public function __construct()
    {
        $this->_init("tasks","Id", new TaskModel());
    }
}