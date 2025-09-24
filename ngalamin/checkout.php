<?php
include 'db.php';

$image = $_GET['image'];
$name = $_GET['name'];
$location = $_GET['location'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$method = $_GET['method'];

$total_price = ($price * $quantity)+ 2000;

$query = "INSERT INTO `orders` (image, name, location, method, quantity, total_price) VALUES ('$image','$name','$location','$method','$quantity','$total_price')";
mysqli_query($conn, $query);

header("location:thank_you.php");
exit;