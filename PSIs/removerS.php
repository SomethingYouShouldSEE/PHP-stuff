<?php

    include("herd.php");
    //include("tests.php");

    $clsDel = new del();
    $clsDel->minusS(1);

    header("location: index.php");

?>