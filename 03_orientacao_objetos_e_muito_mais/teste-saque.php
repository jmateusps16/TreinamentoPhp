<?php

use Banco\Model\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Banco\Model\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperaSaldo();
