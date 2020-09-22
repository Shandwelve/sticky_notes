<?php


namespace application\models;


use application\core\Model;

class Main extends Model
{
    public function getNotes()
    {
        return $this->dataBase->row("
            SELECT
                    title,
                    description,
                    priority,
                    created_at,
                    id
            FROM
                    notes"
        );
    }

    /*public function addNote() {
        return $this->dataBase->query(" 
            INSERT INTO notes (title, description, priority)
            VALUES ();
        ")
    }*/
}