<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario;

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
