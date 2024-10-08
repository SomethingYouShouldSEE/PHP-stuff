<?php
    $i = 1;
    while($i < 10){
        if ($i % 2 == 0 ) {
            # code...
            echo "$i é um número par";
            echo "<br>";
        }
        $i++;
    }

    echo "<br>";

    $x = 1;
    do {       
        echo $x;
        echo "<br>";
        $x++;
    } while ($x < 6);

    echo "<br>";

    $y = 0;
    do {
        $y++;
        if ($y == 3) continue; 
        echo $y;
        echo "<br>";        
    } while ($y < 6);

    echo "<br>";

    for ($x = 0; $x <= 10; $x++) { //for trabalha só com números
        echo "o número é $x <br>";
          }

    echo "<br>";

    $cores = array("vermlho", "verde", "azul", "amarelo"); //foreach trabalha com strings
    foreach ($cores as $cor) {
        echo "$cor <br>";
    }

    echo "<br>";

    $membros = array("Douglas"=>"40", "Jéssica"=>"36", "Gabriel"=>"17"); // "Douglas" é chave e idade é valor
    foreach ($membros as $nome => $idade) {
        echo "$nome : $idade <br>";
    }

?>