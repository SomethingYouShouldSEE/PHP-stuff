<?php

class Contas //
{
    public $saldo;
    public $titular;

    //Metodo para fazer um saque
    public function sacar($valor) // Parametro() - Se declarado obrigrado ser chamado para usar o methodo
    {
        echo "<hr>Saque Efetuado Valor: <b> $valor </b><hr>";
        $this->saldo = $this->saldo - $valor;
    }

    //Metodo para fazer deposito
    public function depositar($valor)
    {
        echo "<hr>Deposito Efetuado Valor <b> $valor </b><hr>";
        $this->saldo = $this->saldo + $valor;
    }

    public function verSaldo()
    {
        return $this->saldo; 
    }

}

$conta1 = new Contas(); // new + class: Novo objeto
$conta2 = new Contas();

$conta1->titular = 'Maria' // Propriedade de objeto
$conta2->titular = 'Luiza' // Propriedade de objeto

$conta1->depositar(500);
$conta2->depositar(1000);

echo '<pre>'; // Linha pre definada
var_dump($conta1);
echo '<hr>';
var_dump($conta2);

echo '<hr>';
echo 'Saldo Atual em Conta1: ' . $conta1->verSaldo();
echo '<br>';
echo 'Saldo Atual en Conta2: ' . $conta2->verSaldo();

    // 

echo "<hr>";
$conta1->$sacar(400);
$conta2->$sacar(600);

echo "<hr>";
echo "Titular da Conta1: " . $conta1->titular;
echo "<br>";
echo "Titular da Conta2: " . $conta2->titular;





?>