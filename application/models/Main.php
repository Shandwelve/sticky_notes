<?php


namespace application\models;


use application\core\Model;

class Main extends Model
{
    public function getNotes(): array
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

    public function filter(string $priority): array
    {
        if ($priority !== 'All') {
            return $this->dataBase->row("
                SELECT
                        title,
                        description,
                        priority,
                        created_at,
                        id
                FROM
                        notes
                WHERE
                    priority = :priority",
                ['priority' => $priority]
            );
        }
        return $this->getNotes();
    }
}