<?php 
$menu =  $_POST["menu"];
echo "<br>";


$price = $_POST["price"];
echo "quantity for  ".$menu ." is ".$price;
echo "<br>";


$dbconnect = mysqli_connect("localhost","root","","tasty_restaurant");

$query  = "INSERT INTO menu (menu,price) values('$menu','$price')";
mysqli_query($dbconnect,$query);
echo "<br>";
echo "price stored successfully";
echo "<br>";
echo  '<a href="menu.php">Go back</a>';

?>