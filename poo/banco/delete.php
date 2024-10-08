<?php

include('conexao.php');

//$email = $_GET['email']

$query = "DELETE FROM usuario where email = '{$_GET['email']}'"; // email do get pego pelo a href
$conexao->exec($query); // Não necessario como em uma variavel

//$retorno = $conexao->exec($delete);

header("location: exibir.php");


?>