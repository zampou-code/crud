<?php

class Person {
    use Database\Db;

    public function create($firstname, $lastname, $phone, $sexe) {
        return $this->excecute(
            "INSERT INTO persons (id, firstname, lastname, phone, sexe, created_at, updated_at) 
            VALUES (NULL, ?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)", 
            [$firstname, $lastname, $phone, $sexe]
        );
    }
    
    public function read($id = null) {
        if ($id) {
            return $this->fetch(
                "SELECT * FROM persons WHERE id = ?",
                [$id]
            );
        }

        return $this->fetch(
            "SELECT * FROM persons",
            [], true
        );
        
    }

    public function update($id, $firstname, $lastname, $phone, $sexe) {
        return $this->excecute(
            "UPDATE persons 
            SET firstname = ?, lastname = ?, phone = ?, sexe = ?, updated_at = CURRENT_TIMESTAMP 
            WHERE persons.id = ?",
            [$firstname, $lastname, $phone, $sexe, $id]
        );
    }

    public function destroy($id) {
        return $this->excecute(
            "DELETE FROM persons WHERE id = ?",
            [$id]
        );
    }
}
