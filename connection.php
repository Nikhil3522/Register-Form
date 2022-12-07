<?php
    $servername = "localhost";
    $username = "root";
    $password = "2580";
    $dbname = "mydb";

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //$conn = mysql_connect("localhost", "root", "2580", "formdata");
    if($conn ){
        //echo "Connection ok!";
    }else{
        echo "Connection failed!";
    }
?>