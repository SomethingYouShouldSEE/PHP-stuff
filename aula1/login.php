<?php
    $email = "doug_m_m@hotmail.com";
    $senha = "123";
    
    if ($_POST["email"] == $email and $_POST["senha"] == $senha)
    {
        header("location: boasvindas.php");
    }
    else
    {
        echo "<script>alert('Dados incorretos!');</script>";
    }
?>