<?php

namespace Database;

use PDO;

Trait Db {
    private function dbConnexion() {
        if (!isset($db)) {
            $db = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }
        
        return $db;
    }

    private function exec(string $query = "", array $payload = []) {
        $request = $this->dbConnexion()->prepare($query);
        $request->execute($payload);
        return $request;
    }

    public function excecute(string $query = "", array $payload = []) {
        $result = $this->exec($query, $payload);

        return ($result) ? true : false;
    }

    public function fetch(string $query = "", array $payload = [], bool $all = false) {
        $result = $this->exec($query, $payload);
        return ($all) ? $result->fetchAll() : $result->fetch();
    }

    public function rowCount(string $query = "", array $payload = [])
    {
        $result = $this->exec($query, $payload);
        return ($result) ? $result->rowCount() : false;
    }

}
