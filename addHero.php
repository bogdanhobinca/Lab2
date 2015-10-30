<?php
    $forename=$_POST["forename"];
    $surname=$_POST["surname"];
    $dob=$_POST["dob"];
    $superSpeed=$_POST["SuperSpeed"];
    $flying=$_POST["Flying"];
    $spittingFire=$_POST["SpittingFire"];

    echo $forename." ".$surname." born in ".$dob."\r\n"."Super Powers:"."\r\n"
            ."Super Speed ".$superSpeed."\r\n"."Flying ".$flying."\r\n"."Spitting Fire ".$spittingFire;

?>