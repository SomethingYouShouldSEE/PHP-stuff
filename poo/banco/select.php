<?php

include('conexao.php');

$query = 'SELECT * FROM produtos limit 5';

$retorno = $conexao->query($query); // Usando $conexao com o banco e criando objeto query e colodando dentro de retorno || query demonstra 

$registros = $retorno->fetchAll(PDO::FETCH_ASSOC); // Pegando todo valor de query e colocando e $registros

foreach ($registros as $registro) // Ditando tudo armazenado em registro
{

    echo 'Id: ' . $registro['id'];
    echo '<br>Filme: ' . $registro['filme'];
    echo '<br>genero: ' . $registro['genero'];
    echo '<br>Indicação: ' . $registro['indicacao'];
    echo '<hr>';

}

echo '<pre>';
print_r($registros);

?>