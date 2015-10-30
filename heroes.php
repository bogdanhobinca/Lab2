<!doctype html>
<html>
<head></head>
<body>
<?php

    $val=$_POST["val"];

    $db=new mysqli("br-cdbr-azure-south-a.cloudapp.net", "beb61afec52c3d", "62ec6fa4", "superHeroDatabase");
    if ($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    $sql_query="Select * from marvelmovies";
    switch($val){
        case "before2010": $sql_query=$sql_query." where yearReleased < 2010"; break;
        case "marvel": $sql_query=$sql_query." where productionStudio='Marvel Studios'"; break;
        case "after2010": $sql_query=$sql_query." where yearReleased < 2010"; break;
        case "oscar": $sql_query=$sql_query." where notes like '%oscar%'"; break;
        default: break;
    }

    $result=$db->query($sql_query);

    while ($row=$result->fetch_array()){
        echo "<p>".$row['title']."</p>";
    }

    $result->close();
    $db->close();
?>
</body>
</html>