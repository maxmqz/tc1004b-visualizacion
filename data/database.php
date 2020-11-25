<?php
    //Database credentials
    $servername = 
    $username = 
    $password = 
    $dbname = 
    $tbname = 

    // Create databse connection
    $conn = mysqli_connect($servername,$username,$password,"$dbname");

    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql' .mysql_error());
    }
    //echo "[MySQL] connected successfully <br/>";