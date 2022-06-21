<?php

namespace Alura\Banco\Modelo;

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

    //Recomenda-se não criar métodos próprios com __ pois esse padrão é usado para métodos mágicos do php
    public function __toString(): string
    {
        //Essas propriedades só podem ser acessadas na classe, então aqui eu acesso diretamente elas para imprimir
        //como string
        return "$this->rua, $this->numero, $this->bairro, $this->cidade";
    }

    public function __get(string $nomeAtributo)
    {
        //Pegar o parametro passado e chamar o metodo correspondente

        //ucfirst = coloca letra maiuscula na primeira letra
        //Concatenando com o nome do metodo
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
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