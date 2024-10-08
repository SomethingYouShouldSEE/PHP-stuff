<html>

<form action="insert.php" method="post"> <!-- action="PropriaPagina.php recarrega a pagina" Executa a pagina  -->

    Nome: <input type="text" name="nome" style="margin-left: 10px;">
    <br>Usuario: <input type="text" name="usuario" style="margin-left:-1px;">
    <br>Senha: <input type="text" name="senha" style="margin-left: 10px;">
    <br>Saldo: <input type="text" name="saldo" style="margin-left: 13px;">
    <br><br><input type="submit" value="Inserir">

</form>

<?php
    // (!empty($_POST["test"]))  || 

    include("conexao.php");

    if (!empty($_POST["id"]))
    {
        $sql = "DELETE FROM contas WHERE id={$_POST['id']}";
        $conn->query($sql3);
    }

    if ($_POST["nome"] != "" && $_POST["usuario"] != "" && $_POST["saldo"] != "")
    {

        $sql = "INSERT INTO contas (nome,usuario,senha,saldo) VALUES ('{$_POST["nome"]}','{$_POST["usuario"]}','{$_POST["senha"]}','{$_POST["saldo"]}')"; // Usando ' ao inves de "
        $conn->query($sql);
    
    }
    else
    {
        echo "<br>";
        echo "Escreva algo";
    }

    

    $sql = "SELECT id,nome,usuario,saldo FROM contas";
    $dados = $conn->query($sql2); // pegando coluna do banco e colocando em $dados

    while($row = $dados->fetch_assoc()) 
    {       
        echo"<table><tr><th>ID</th><th>Nome</th><th>Usuario</th><th>Saldo</th></tr>";


        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["usuario"].
        "</td><td>".$row["saldo"]."</td></td>
        <form action='insert.php' methot='POST'>
        <input type='hidden' name='id' value'{$row["id"]}'>
        <input type='submit' value 'Deletar'>
        </form>
        </tr>";
 
    }
?>

</html>