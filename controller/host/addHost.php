<?php

include '../../model/site.php';

session_start();
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_POST['image'];
$user_id = $_SESSION['user_id'];
$price = $_POST['price'];
$food = (isset($_POST['food']) ? 1 : 0);


echo $title."<br>";
echo $description."<br>";
echo $image."<br>";
echo $user_id."<br>";
echo $price."<br>";
echo $food."<br>";
try {
    addSite($title, $description, $user_id, $price, $food, $image);    
    echo "<script>alert('Host agregado con éxito');
    window.location.href='../../index.php?page=myhosts';
    </script>";
} catch (PDOException $e) {
    //ERROR GOES HERE
}

