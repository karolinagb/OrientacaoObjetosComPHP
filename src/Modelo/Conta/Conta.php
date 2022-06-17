<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    //Deixar propriedade sempre privadas e métodos públicos (depende do método)
    //Esses atributos são da instância, dos objetos que forem criados
    //Quando vemos atributos relacionados entre si ou comportamentos (e não relacionados a classe em si), 
    //talvez seja indícios para criarmos outa classe
    private Titular $titular; //Instancia de uma classe com instancia de outra classe = composição de objetos
    public $saldo;

    //Atributo static é um atributo da forma do bolo, ou da classe Conta em si
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this->saldo = 0;     
        $this->titular = $titular;

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
        $tarifaSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tarifaSaque;

        //this se refere a referência atual que chamou esse método
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
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

    //Método estático para recuperar o numero de contas criadas
    public static function getNumeroContas() : int{
        return self::$numeroDeContas;
    }

    public function getNomeTitular(){
        return $this->titular->getNome();
    }

    public function getCpfTitular(){
        return $this->titular->getCpf();
    }
}

