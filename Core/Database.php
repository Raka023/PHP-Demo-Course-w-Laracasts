<?php

namespace Core;

use PDO;

class Database {
    private $connection;
    private $stmt;

    public function __construct($config, $username = 'root', $password = '') {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $this->connection = new PDO($dsn, $username, $password, $options);
    }

    public function query($query, $params = []) {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);

        return $this;
    }

    public function find()  {
        return $this->stmt->fetch();
    }

    public function findOrFail()  {
        $result = $this->find();

        if (! $result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }

    public function get() {
        return $this->stmt->fetchAll();
    }
}