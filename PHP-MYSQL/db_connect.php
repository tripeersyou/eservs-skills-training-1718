<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rotten_apples";
    $db = new mysqli($hostname,$username,$password,$dbname);
    if($db->connect_errno){
        echo "Failed to connect ".$db->connect_error;
    }

?>