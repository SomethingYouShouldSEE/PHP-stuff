<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="cs/aaa.css">

</head>
<body>
    
<?php 

    include("conexao.php");
    include("selectstuff.php");

    echo "<table id='test'><tr>
    <th>ID</th>
    <th>Filme</th>
    <th>Genero</th>
    <th>Indicação</th>
    <th>Lançamento</th>
    <th>Duração</th>
    <th>Diretor</th>
    <th>Produtora</th>
    <th>Valor</th></tr>";

    while($row = $dados->fetch_assoc())
    {
        echo "<tr>
        <td class='product'>".$row['id']."</td>
        <td class='product'>".$row['filme']."</td>
        <td class='product'>".$row['genero']."</td>
        <td class='product'>".$row['indicacao']."</td>
        <td class='product'>".$row['lancamento']."</td>
        <td class='product'>".$row['duracao']."</td>
        <td class='product'>".$row['diretor']."</td>
        <td class='product'>".$row['produtora']."</td>
        <td class='product'>".$row['valor']."</td>
        </tr>";

        
    }
    echo"<form action='insert.php' method='POST'>
            <input type='submit' name='' value='Inserir' id='insertbtn' class='tripletsbtn'>
            <input type='submit' name='' value='Delete' id='deletebtn' class='tripletsbtn'>
            <input type='submit' name='' value='Update' id='updatebtn' class='tripletsbtn'>
        </form>";

?>



</body>
</html>