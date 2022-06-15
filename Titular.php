<?php

class Titular
{
    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, $nome, Endereco $endereco){
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getCpf() : string 
    {
        return $this->cpf->getNumero();
    }

    public function getNome() : string 
    {
        return $this->nome;
    }

    private function validaNomeTitular($nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function GetEndereco(Endereco $endereco): Endereco
    {
        return $this->endereco;
    }        
}