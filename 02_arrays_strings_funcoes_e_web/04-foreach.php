<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Mateus',
        'saldo' => 150000
    ], 
    22345679912 => [
        'titular' => 'Sabrina',
        'saldo' => 180000
    ], 
    32345676913 => [
        'titular' => 'Samily',
        'saldo' => 145000
    ], 
];

// Adicionando valor ao array depois de criado

$contasCorrentes[42345673914] = [
    'titular' => 'Miguel',
    'saldo' => 160000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "Cpf: " . $cpf .", Titular: " . $conta['titular'] . ", Saldo: " . $conta['saldo'] . PHP_EOL;
}

//Caso não informe será adicionado o valor de incremento da lista

$idadeList = [21, 23];
$idadeList[] = 19;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

//Também pode usar a chave associativa da com string
$contasCorrentesString = [
    '123.456.789-10' => [
        'titular' => 'Mateus',
        'saldo' => 150000
    ], 
    '223.456.799-12' => [
        'titular' => 'Sabrina',
        'saldo' => 180000
    ], 
    '323.456.769-13' => [
        'titular' => 'Samily',
        'saldo' => 145000
    ], 
];

// Adicionando valor ao array depois de criado

$contasCorrentesString['423.456.739-14'] = [
    'titular' => 'Miguel',
    'saldo' => 160000
];

foreach ($contasCorrentesString as $cpf => $conta) {
    echo "Cpf: " . $cpf .", Titular: " . $conta['titular'] . ", Saldo: " . $conta['saldo'] . PHP_EOL;
}

//logo podemos adicionar da forma $lista[] = $item; ou $lista[$chave] = $item;