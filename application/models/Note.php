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
                [
                    'id' => $id
                ]
            );
            return 1;
        }

        return 0;
    }

    public function addNote(array $data): int
    {
        if (!empty($data)) {
            $this->dataBase->query("
                INSERT INTO
                    notes
                    (title, priority, description)
                VALUES
                    (:title, :priority, :description)",
                [
                    'title'       => $data['title'],
                    'priority'    => $data['priority'],
                    'description' => $data['description']
                ]
            );
        }

        return $this->dataBase->lastInsertId();
    }

    public function getNoteById(int $id): array
    {
        return $this->dataBase->row("
            SELECT
                title,
                description,
                priority
            FROM
                notes
            WHERE
                id = :id",
            [
                "id" => $id
            ]
        );
    }

    public function updateNote(int $id, array $data): void
    {
        if (!empty($data)) {
            $this->dataBase->query("
            UPDATE
                notes
            SET 
                title = :title, 
                priority = :priority,
                description = :description,
                updated_at = NOW()
            WHERE 
                id = :id",
                [
                    "title"       => $data['title'],
                    "priority"    => $data['priority'],
                    "description" => $data['description'],
                    "id"          => $id
                ]
            );
        }
    }
}