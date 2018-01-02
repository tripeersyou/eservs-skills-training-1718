<?php
    require 'db_connect.php';
    if($_GET){
        $id = htmlspecialchars($db->real_escape_string($_GET["id"]));
        $query = "DELETE FROM reviews WHERE id = $id";
        $db->query($query);
        $db->close();
        header("Location: index.php#review");
        
    }