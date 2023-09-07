<?php

require_once 'autoload.php';

$pdo = \Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
