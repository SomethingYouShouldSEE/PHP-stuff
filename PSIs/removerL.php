<?php

    include("herd.php");
    //include("tests.php");

    $clsDel = new del();
    $clsDel->AddLeite()->minusL(1);

    header("location: index.php");

?>