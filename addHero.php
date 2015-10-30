<?php
    $forename=$_POST["forename"];
    $surname=$_POST["surname"];
    $dob=$_POST["dob"];
    $superSpeed=$_POST["SuperSpeed"];
    $flying=$_POST["Flying"];
    $spittingFire=$_POST["SpittingFire"];

    $rez=$forename." ".$surname." born in ".$dob."\r\n"."Super Powers:"."\r\n";


    if ($superSpeed!=null){
        $rez=$rez."Super Speed true"."\r\n";
    }else{
        $rez=$rez."Super Speed false"."\r\n";
    }
    if ($flying!=null){
        $rez=$rez."Flying true"."\r\n";
    }else {
        $rez=$rez."Flying false"."\r\n";
    }
    if ($spittingFire!=null){
        $rez=$rez."Spitting Fire true";
    }else{
        $rez=$rez."Spitting Fire false";
    }

    echo $rez;
?>