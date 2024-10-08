<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs/aaa.css">
    <link rel="stylesheet" href="cs/back.css">

</head>
<body>  

<?php

    // Sistema de mercado???
  
    include("herd.php");
    include("tests.php");

    

    // Nome do item
    $clsStart = new Prods();
    $clsStart->whiskey = 'Whiskey';
    $clsStart->skoll = 'Skoll';
    $clsStart->leite = 'Leite';



    // echo'<form id="GG" action="index.php" method="POST">
    //     <input id="push" class="bumps" class="bumps" type="text" name="item">
    //     <input class="bumps" type="text" name="quant">
    //     <input id="btnA" type="submit" value="HA">
    // </form>';

    echo "<tr><table id='test'><tr>
    <th class='prod'>Produto</th>
    <th class='prod'>Unidade</th>
    <th class='prod'>Delete</th>
    <tr>";


    echo "<tr>
    
    <td class='row'>".$clsStart->GetWhiskeyT()."</td>
    <td class='row'>".$baseW."</td>

    <td class='row'><form action='removerW.php'>
    <input type='submit' value='HA'>

    </form></td>
    </tr>

    <tr>
    <td class='row'>".$clsStart->GetSkollT()."</td>
    <td class='row'>".$baseS."</td>

    <td class='row'><form action='removerS.php' >
    <input type='submit' value='HA'>

    </tr>

    <tr>
    <td class='row'>".$clsStart->GetLeiteT()."</td>
    <td class='row'>".$baseL."</td>

    <td class='row'><form action='removerL.php'>
    <input type='submit' value='HA'>

    </tr>
    
    

    ";


    //var_dump($clsAdd->GetWhiskeyT(10));



?>

<html>




</html>


</body>
</html>