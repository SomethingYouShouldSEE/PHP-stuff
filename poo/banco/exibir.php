<?php

include('conexao.php');

$query = 'SELECT * FROM usuario limit 5';

$retorno = $conexao->query($query); // Usando $conexao com o banco e criando objeto query e colodando dentro de retorno || query demonstra 

$registros = $retorno->fetchAll(PDO::FETCH_ASSOC); // Pegando todo valor de query e colocando e $registros

foreach ($registros as $registro) // Ditando tudo armazenado em registro
{

    echo 'Nome: ' . $registro['nome'];
    echo '<br>Email: ' . $registro['email'];
    echo '<br>Senha: ' . $registro['senha'];
    echo '<br><a href ="atualizar.php?email='.$registro['email'];
    echo '"><img src="editar.png" width=2%></a>';

    echo '&nbsp'; // Espaço para html

    echo '<br><a href ="delete.php?email='.$registro['email']; // Pegando do banco e adicionando aq para remoção quando selecionado no del
    echo '"><img src="deletar.png" width=2%></a>';

    echo '<hr width=30% align="left">';


}

echo "<a href='inserir.php'><button>Inserir</button></a>";

?>

<html>


</html>