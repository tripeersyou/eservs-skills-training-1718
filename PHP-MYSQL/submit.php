<?php 
    require 'db_connect.php';
    if ($_POST) {
        $name = htmlspecialchars($db->real_escape_string($_POST['name']));
        $stars = htmlspecialchars($db->real_escape_string($_POST['rating']));
        $review = htmlspecialchars($db->real_escape_string($_POST['review']));
        if($name != null && $review != null){
            $query = "INSERT INTO reviews(name, rating, review) VALUES ('$name', '$stars', '$review');";
            $db->query($query);
        }
        $db->close();
    }
    header("Location: index.php#review");
?>