<html>


<form action="login.php" method="post">
Email: <input type="text" name="email">
Senha: <input type="text" name="senha2">
<input type="submit" value="Acessar"> 

<?php
include ("store.php"); // Inclui todos comandos da pagina para essa.

echo $chance;
?>



</html>