<?php

class Conta
{
    //Deixar propriedade sempre privadas e métodos públicos (depende do método)
    //Esses atributos são da instância, dos objetos que forem criados
    private $cpfTitular;
    private $nomeTitular;
    public $saldo;

    //Atributo static é um atributo da forma do bolo, ou da classe Conta em si
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular){
        $this->saldo = 0;     
        $this->cpfTitular = $cpfTitular;

       $this->validaNomeTitular($nomeTitular);

        $this->nomeTitular = $nomeTitular;

        //Quando tenho um atributo estático eu não acesso pelo $this (que referencia a instância)
        //Eu acesso pelo nome da própria classe ou através da palavra self
        //Conta::$numeroDeContas++;
        self::$numeroDeContas++;
    }

    //Esse destrutor vai ser executado quando cada uma das contas deixar de existir
    public function __destruct(){
        self::$numeroDeContas--;
    }

    // Se eu não colocar public, o php entender automaticamente como public
    public function Sacar(float $valorASacar) : void //Função dentro da classe = método
    {
        //this se refere a referência atual que chamou esse método
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void{
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void{
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo() : float 
    {
        return $this->saldo;
    }

    public function getCpfTitular() : string 
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular() : string 
    {
        return $this->nomeTitular;
    }

    private function validaNomeTitular($nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    //Método estático para recuperar o numero de contas criadas
    public static function getNumeroContas() : int{
        return self::$numeroDeContas;
    }
}

