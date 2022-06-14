<?php

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    // Se eu não colocar public, o php entender automaticamente como public
    public function Sacar(float $valorASacar) : void //Função dentro da classe = método
    {
        //this se refere a referência atual que chamou esse método
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
        } else{
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void{
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
        }
        else{
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void{
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
        }
        else{
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }

    }
}

