<?php

include('conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$emailantigo = $_POST["emailantigo"];

$update = "UPDATE usuarios 
set nome = '{$nome}'
email = '{$email}'
senha = '{$senha}'
where email = '{$emailantigo}'";

$conexao->exec($update);

header("location: exibir.php");

?>