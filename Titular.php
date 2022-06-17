<?php

//Titular herda de Pessoa
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco){
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function GetEndereco(Endereco $endereco): Endereco
    {
        return $this->endereco;
    }        
}