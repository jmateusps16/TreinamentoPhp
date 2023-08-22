<?php

namespace Banco\Model;

/**
 * Class Endereco
 * @package Banco\Model
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades;

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

	
	public function recuperaCidade() {
		return $this->cidade;
	}
	
	
	public function recuperaBairro() {
		return $this->bairro;
	}
	
	
	public function recuperaRua() {
		return $this->rua;
	}
	
	
	public function recuperaNumero() {
		return $this->numero;
	}

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}