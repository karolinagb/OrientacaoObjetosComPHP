<?php

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

//Titular herda de Pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco){
        //Chamando o construtor da classe mãe
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function GetEndereco(Endereco $endereco): Endereco
    {
        return $this->endereco;
    }        
}