<?php

namespace Banco\Model\Funcionario;

use Banco\Model\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function caculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
