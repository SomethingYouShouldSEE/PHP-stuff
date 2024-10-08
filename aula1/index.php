<?php
    echo "Olá mundo!";
    echo "<br>";
    $x = 10;
    echo $x;
    echo "<br>";
    echo "###############";
?>

<br>

<?php
    echo $x;
    echo "<br>";
    $x = "15";
    var_dump($x);
    echo "<br>";
    var_dump(["Douglas","Mendes",10]);
    echo "<br>";
    echo "<br>";

    $dados = ["Douglas","Mendes",10];
    echo $dados[2];

    echo "<br>";

    $info = array("Douglas","Mendes",10);
    echo $info[0];
    echo "<br>";

    define("nome","Douglas Mendes Mariano");
    echo nome;
    echo "<br>";

    const sobrenome = "Mariano";
    echo sobrenome;
    echo "<br>";

    $valor = 70;

    if ($valor < 50){
        echo "Sim o meu valor é menor do que 50. O meu valor é ".$valor;
        echo "<br>";
    }elseif ($valor > 50){
        echo "Sim o meu valor é maior do que 50. O meu valor é ".$valor;
        echo "<br>";
    }else{
        echo "Sim o meu valor é igual a 50. O meu valor é ".$valor;
        echo "<br>";
    }
?>