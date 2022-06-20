<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

//Classe de serviço nao representa nada palpavel do mundo real
class ControladorBonificacoes
{
    private $totalBonificacao = 0;

    public function adicionaBonificacao(Funcionario $funcionario): void
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float
    {
        return $this->totalBonificacao;
    }
}
