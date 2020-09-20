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
        $this->model->deleteNoteById($_GET['id']);
        $this->view->redirect('');
    }

    public function edit(): void
    {
        $this->view->render('Edit Note');

    }
}