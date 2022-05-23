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
}

