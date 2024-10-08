<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco"; 

//Create concection
$conn = new mysqli($servername, $username, $password, $dbname); // Conecta Banco

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Conectado com sucesso";

?>