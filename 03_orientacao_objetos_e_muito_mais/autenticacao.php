<?php

use Banco\Model\CPF;
use Banco\Model\Funcionario\Diretor;
use Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Banco\Model\Funcionario\Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

//Deve retornar: Ok. Usuário logado no sistema
$autenticador->tentaLogin($umDiretor, '4321');