<?php
$contaUm = [
    'titular' => 'Mateus',
    'saldo' => 150000
];
$contaDois = [
    'titular' => 'Samily',
    'saldo' => 145000
];
$contaTres = [
    'titular' => 'Sabrina',
    'saldo' => 180000
];
$contaQuatro = [
    'titular' => 'Miguel',
    'saldo' => 160000
];
$contasCorrentes = [$contaUm, $contaDois, $contaTres, $contaQuatro];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo "Titular: " . $contasCorrentes[$i]['titular'] . ", Saldo: " . $contasCorrentes[$i]['saldo'] . PHP_EOL;
}

