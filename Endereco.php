<?php

class Endereco{

    private string $cidade;
    private string $bairro;
    private string $rua;

    //numero em int = pode ter desperdício de memória com números muito grandes, pode não ser representado de forma consistente
    //Dica = se você não precisa realizar cálculos em alguma propriedade, em algum atributo, ou variável, não precisa ser tipo numérico
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

	function getCidade(): string {
		return $this->cidade;
	}
	
	function getBairro(): string {
		return $this->bairro;
	}
	
	function getRua(): string {
		return $this->rua;
	}
	
	function getNumero(): string {
		return $this->numero;
	}
}