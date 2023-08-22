<?php

namespace Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function caculaBonificacao(): float
    {
        return 500.0;
    }
}
