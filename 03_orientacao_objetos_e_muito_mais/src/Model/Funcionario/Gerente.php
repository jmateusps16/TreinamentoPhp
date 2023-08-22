<?php

namespace Banco\Model\Funcionario;

use Banco\Model\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function caculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha ==='4321';
    }
}
