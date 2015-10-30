<!doctype html>
<html>
<head></head>
<body>
<?php

    $val=$_POST["val"];
    echo $val;

    $db=new mysqli("br-cdbr-azure-south-a.cloudapp.net", "beb61afec52c3d", "62ec6fa4", "superHeroDatabase");
    if ($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }

    $sql_query="Select * from marvelmovies";
    $result=$db->query($sql_query);

    while ($row=$result->fetch_array()){
        echo "<p>".$row['title']."</p>";
    }

    $result->close();
    $db->close();
?>
</body>
</html>