<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\Task\TaskModel;
use MVC\Models\Task\TaskRepository;

class TasksController extends Controller
{
    function index()
    {
        $taskRepo = new TaskRepository();
        $d['tasks'] = $taskRepo->getall();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        $taskRepo = new TaskRepository();
        $task= new TaskModel();
        if (isset($_POST["title"]))
        {

            $task->setTitle($_POST["title"]);
            $task->setDescription($_POST['description']);
            if ($taskRepo->save($task))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $taskRepo = new TaskRepository();
        $task= new TaskModel();
        $d["task"] = $taskRepo->getId($id);
        if (isset($_POST["title"]))
        {

            $task->setTitle($_POST["title"]);
            $task->setDescription($_POST['description']);
            $task->setId($id);
            $taskRepo->save($task);

            if ($taskRepo->save($task))
            {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $taskRepo = new TaskRepository();
        if ($taskRepo->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>