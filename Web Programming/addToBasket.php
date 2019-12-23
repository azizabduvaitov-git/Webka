<?php
$db = mysqli_connect('localhost', 'root', '', 'shopping_cart');
$user_id=$_POST['user_id'];
$dvd_id=$_POST['dvd_id'];
mysqli_query($db, "INSERT INTO `cart` (`user_id`, `dvd_id`) VALUES ('$user_id', '$dvd_id')");
?>