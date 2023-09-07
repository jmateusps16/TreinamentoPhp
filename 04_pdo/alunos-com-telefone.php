<?php

use Pdo\Infrastructure\Persistence\ConnectionCreator;
use Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \Pdo\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

var_dump($studentList);