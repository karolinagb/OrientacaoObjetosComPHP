<?php

class Pessoa
{
    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf->getNumero();
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    

    protected function validaNomeTitular($nome){
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
