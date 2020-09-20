<?php


namespace application\models;


use application\core\Model;

class Note extends Model
{
    public function deleteNoteById(int $id): int
    {
        if (!empty($id)) {
            $this->dataBase->query("
                DELETE FROM 
                    notes 
                WHERE 
                    id = :id",
                ['id' => $id]
            );
            return 1;
        }

        return 0;
    }
}