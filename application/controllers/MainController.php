<?php


namespace application\controllers;


use application\core\Controller;

class MainController extends Controller
{
    public function index(): void
    {
        $notes = $this->model->getNotes();
        $this->model->makeDate($notes);
        $this->view->render('Main Page', ['notes' => $notes]);
    }

    public function filter(): void
    {
        $notes = $this->model->filter($_POST['priority']);
        $this->view->getComponent(['notes' => $notes]);
    }
}