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

    public function makeDate(array &$notes)
    {
      foreach ($notes as &$note) {
          $note['created_at'] = 'test';
      }
    }
}