<?php
namespace Core;

class Database {
    public $connection;
    public $statement;

    public function __construct($congif, $username='root', $password='') {
        
        
        $dsn = 'mysql:'.http_build_query($congif,  '', ';');

        //dd($dsn);
        // $dsn = "mysql:host=localhost;port=3306;dbname=phpbg;user=root;charset=utf8mb4";
        
        $this->connection = new \PDO($dsn, $username,$password, [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }

    public function query ($query, $params = []) {
        
        $this->statement = $this->connection->prepare($query);
        
        $this->statement->execute($params);

        return $this;
    }

    public function get() {
        return $this->statement->fetchAll();
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->find();

        if (! $result) {
            abort();
        }

        return $result;
    }
}