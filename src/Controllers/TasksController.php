<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskRepository;
use MVC\Models\TaskModel;

class TasksController extends Controller
{
    function index()
    {
        $taskRepository = new TaskRepository();

        $d['tasks'] = $taskRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["sbm"])) {
            $taskRepository = new TaskRepository();
            $model = new TaskModel();
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);

            if ($taskRepository->add($model)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $taskRepository = new TaskRepository();
        $oldModel = $taskRepository->get($id);
        $d["task"] = $oldModel->getProperties();

        if (isset($_POST["title"])) {
            $model = new TaskModel();
            $model->setId($id);
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            if ($taskRepository->add($model)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $taskRepository = new TaskRepository();
        if ($taskRepository->delete($id)) {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
