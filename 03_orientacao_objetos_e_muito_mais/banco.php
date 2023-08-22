<?php

require_once 'autoload.php';

use Banco\Model\Conta\Conta;
use Banco\Model\Conta\Titular;
use Banco\Model\Endereco;
use Banco\Model\CPF;
use Banco\Model\Conta\ContaCorrente;
use Banco\Model\Conta\ContaPoupanca;

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$rogerio = new Titular(new CPF('123.456.789-10'), 'Rogério Alencar', $endereco);
$primeiraConta = new ContaCorrente($rogerio);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); //isso é ok.

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaPoupanca($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$terceiraConta = new ContaCorrente(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta); //remove a segunda conta da memória.
echo Conta::recuperaNumeroDeContas(); //retorna 2 contas porque uma foi removida