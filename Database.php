<?php

class Database
{
    private $connection;
    private $statement;

    public function __construct($config, $username = "root", $password = ""){


        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query, $params = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function fetchOrAbort(){
        $result = $this->statement->fetch();

        if(!$result)
            abort();

        return $result;
    }

    public function fetchOrCreate(){
        $result = $this->statement->fetch();

        if(!$result)
            return false;

        return $result;
    }

    public function fetchAllOrAbort(){
        $result = $this->statement->fetchAll();

        if(!$result)
            abort();

        return $result;
    }

    public function fetchAllOrCreate(){
    $result = $this->statement->fetchAll();

    if(!$result)
        return false;

    return $result;
}
}