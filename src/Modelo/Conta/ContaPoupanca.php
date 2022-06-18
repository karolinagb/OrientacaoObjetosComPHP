<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function Sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        
        $valorSaque = $valorASacar + $tarifaSaque;

        //this se refere a referência atual que chamou esse método
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}
