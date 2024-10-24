<?php

class Database {
    public $connection;

    public function __construct($congif, $username='root', $password='') {
        
        
        $dsn = 'mysql:'.http_build_query($congif,  '', ';');

        //dd($dsn);
        // $dsn = "mysql:host=localhost;port=3306;dbname=phpbg;user=root;charset=utf8mb4";
        
        $this->connection = new PDO($dsn, $username,$password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query ($query) {
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();

        return $statement;
    }
}