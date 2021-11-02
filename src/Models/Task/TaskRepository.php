<?php

namespace MVC\Models\Task;
use MVC\Models\Task\TaskResurceModel;

class TaskRepository
{
    protected $taskResourceModel;

    public function __construct()
    {
        $this->taskResourceModel = new TaskResurceModel('tasks', 'id', new TaskModel());
    }

    public function getAll(){
        return $this->taskResourceModel->getAll();
    }

    public function getId($id)
    {
        return $this->taskResourceModel->getId($id);
    }

    public function delete($id)
    {
        return $this->taskResourceModel->delete($id);
    }

    public function save($model){
        return $this->taskResourceModel->save($model);
    }
}