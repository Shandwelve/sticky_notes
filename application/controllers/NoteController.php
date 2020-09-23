<?php


namespace application\controllers;


use application\core\Controller;

class NoteController extends Controller
{
    public function add(): void
    {
        if (!empty($_POST)) {
            $this->model->addNote($_POST);
            $this->view->redirect('');
        }
        $this->view->render('Add Note');
    }

    public function delete(): void
    {
        $this->model->deleteNoteById($_GET['id']);
        $this->view->redirect('');
    }

    public function edit(): void
    {
        if (!empty($_POST)) {
            $this->model->updateNote($_GET['id'], $_POST);
            $this->view->redirect('');
        }
        $data = $this->model->getNoteById($_GET['id']);
        $this->view->render('Edit Note', ["data" => $data[0]]);
    }
}