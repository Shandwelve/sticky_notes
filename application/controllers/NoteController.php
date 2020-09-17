<?php


namespace application\controllers;


use application\core\Controller;

class NoteController extends Controller
{
    public function add(): void
    {
        $this->view->render('Add Note');
    }

    public function delete(): void
    {
        var_dump($_POST);
        $this->view->render('Delete Note');
    }

    public function edit(): void
    {
        $this->view->render('Edit Note');

    }
}