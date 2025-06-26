<?php

abstract class AbtractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "yasminaabdouni_phpj6";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "yasminaabdouni";
        $password = "68efd78f9b03b1e3dc68b60b2d8f3a04";

        $this -> db = new PDO(
        $connexionString,
        $user,
        $password
        );
    }
}

