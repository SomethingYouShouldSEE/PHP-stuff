<?php

$sql = "SELECT id,filme,genero,indicacao,lancamento,duracao,diretor,produtora,valor FROM produtos LIMIT 30";
$dados = $conn->query($sql);

?>

