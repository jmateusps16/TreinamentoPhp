<?php

namespace Mvc\Infrastructure\Persistence;

use PDO;
use PDOException;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $host = 'localhost';
        $dbname = 'phppdo';
        $username = 'postgres';
        $password = '123@Qwe!';

        try {
            $connection = new PDO(
                "pgsql:host=$host;dbname=$dbname",$username,$password
            );
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            die();
        }
    }
}