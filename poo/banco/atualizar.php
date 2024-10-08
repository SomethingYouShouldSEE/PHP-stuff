
<html>

<?php

    include("conexao.php");
    $gemail = $_GET["email"];

    if (!empty($_GET["email"]))
    {
        $query = 'SELECT * FROM usuario WHERE email = '. "'$gemail'";
        $retorno = $conexao->query($query);
        $dados = $retorno->fetchAll(PDO::FETCH_ASSOC); // Pega tudo do banco e coloca em retorno

        foreach($dados as $dado)
        {
            $nome = $dado['nome'];
            $email = $dado['email'];
            $senha = $dado['senha'];
        }
    }
    else
    {
        
        $nome = ""; // Por causa do 'if' $nome funciona como o de cima 
        $email = "";
        $senha = "";
        $emailantigo = "";
    }

?>


<form action="update.php" method="POST">

    Nome: <input type="text" name="nome" value="<?php echo $nome;?>">
    <br>Email: <input type="text" name="email" value="<?php echo $email;?>">
    <br>Senha: <input type="text" name="senha" value="<?php echo $senha;?>">
    <br><input type="submit" value="Atualizar">
    <input type="hidden" name="emailantigo" value="<?php echo $email ?>">

</form>


</html>