<?php

namespace Banco\Model\Funcionario;

class EditorVideo extends Funcionario
{
    public function caculaBonificacao(): float
    {
        return 600;
    }
}
