<?php

include '../../model/site.php';

session_start();
$title = $_POST['title'];
$description = $_POST['description'];
$user_id = $_SESSION['user_id'];
$price = $_POST['price'];
$food = (isset($_POST['food']) ? 1 : 0);

echo $title."<br>";
echo $description."<br>";
echo $user_id."<br>";
echo $price."<br>";
echo $food."<br>";
try {
    addSite($title, $description, $user_id, $price, $food);    
    //header("location: http:///localhost/hosters");
} catch (PDOException $e) {
    //ERROR GOES HERE
}

