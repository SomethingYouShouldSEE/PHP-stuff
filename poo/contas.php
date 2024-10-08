<?php

class Agencia
{
    public $nome;
    public $telefone;

    public function getNome()
    {
        return $this->nome; // Se direcionando para para nome dessa variavel
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

}

class Titular
{
    public $nome;
    public $celular;

    public function setDados(array $dados) // Ditando o array ao chamar 'setDados'
    {
        $this->nome = $dados['nome'];
        $this->telefone = $dados['celular'];
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCelular()
    {
        return $this->celular;
    }

}

Class Contas
{
    public $agencia;
    public $titular;
    public $saldo;

    public function setAgencia(Agencia $agencia) // 
    {
        $this->agencia = $agencia; // $this->agencia || 
    }

    public function getAgencia()
    {
        return  $this->agencia;
    }

    public function setTitular(Titular $titular)
    {
        $this->Titular = $titular;
    }

    public function getTitular()
    {
        return $this->titular;
    }
}

    $objAgencia = new Agencia();
    $objAgencia->nome = 'VL Mariana - VLM';
    $objAgencia->telefone = '4044-2555';

    $objTitular = new Titular();
    $objTitular->setDados([
    'nome' => 'Aline dos Santos',
    'celular' => '96203-9987']);

$objConta = new Contas();
$objConta->setAgencia($objAgencia); // Colocando o objeto em array usando 'set'
$objConta->setTitular($objTitular);
$objConta->saldo = 500;

echo '<pre>'; // Adjusta em texto usando pre-formatação
var_dump($objAgencia); // Exibindo o objeto agencia
echo '<hr>';
var_dump($objTitular);
echo '<hr>';
var_dump($objConta);
echo '<hr>';
var_dump($objConta->getAgencia());
echo '<hr>';

echo '#######################################################################################################';
echo '<hr>';
echo 'Agencia: '. $objConta->getAgencia()->getNome() . ' - ' . $objConta->getAgencia()->getTelefone() . '<br>';
echo 'Titular: '. $objConta->getTitular()->getNome() . ' - ' . $objConta->getTitular()->getCelular() . '<br>';
echo 'Saldo ' . $objConta->saldo;


?>