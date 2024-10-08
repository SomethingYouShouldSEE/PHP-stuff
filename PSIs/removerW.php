<?php

    include("herd.php");
    //include("tests.php");

    $clsDel = new del();
    $clsDel->AddWhiskey(0)->minusW(1);

    header("location: index.php");

?>