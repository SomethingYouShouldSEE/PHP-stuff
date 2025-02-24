<?php

class Contas
{
    public $saldo = 0;
    public $titular;

    public function sacar($sacar)
    {
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function verSaldo()
    {
        return $this->saldo;
    }

}

class ContaPoupanca extends Contas // Tudo que há em contas pode ser chamada nesta classe
{

    public $aniversario = 6;

    public function aplicar($valor)
    {
        echo "<hr> Aplicação efetua <b> $valor </b><hr>";
        $this->depositar($valor);
    }

    class ContaPoupancaConjunta extends ContaPoupanca
    {}

    $conta = new Contas();
    $conta->depositar(1200);

    $contaPoupanca = new ContaPoupanca();
    $contaPoupanca->aplicar(2000);

    $contaPoupancaConjunta = new ContaPoupancaConjunta();

    echo '<pre>';
    var_dump($conta);
    var_dump($contaPoupanca)
    echo '<hr>'
    var_dump($contaPoupancaConjunta);
}



?>