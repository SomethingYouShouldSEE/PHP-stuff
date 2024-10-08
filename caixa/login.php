<html>

<?php
include("store.php");


if ($_POST["email"] == $email && $_POST["senha"] == $senha)
{
    header("location: caixa.php"); // Redireciona para essa pagina
}
else
{

    echo "<script>alert('Dados incorretos!');</script>";
    $chance++;

}
?>

<form action="index.php" value="Voltar"><input type="submit" value="Voltar"></form>


</html>

