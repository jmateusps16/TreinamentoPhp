<?php

use Pdo\Domain\Model\Student;
use Pdo\Infrastructure\Persistence\ConnectionCreator;
use Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);
