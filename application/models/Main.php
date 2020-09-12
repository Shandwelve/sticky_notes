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
                                        updated_at
                                FROM
                                        notes"
        );
    }
}