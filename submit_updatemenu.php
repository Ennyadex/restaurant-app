<?php
$id = $_POST["menuid"];
$nmenu = $_POST["newmenu"];
$nprice = $_POST["newprice"];
$connect = mysqli_connect("Localhost","root","","tasty_restaurant");
$sql ="UPDATE menu SET menu = '$nmenu',
price = '$nprice ' WHERE id =".$id;
mysqli_query($connect,$sql);
echo "menu updated  successfully";

echo "<br>";
echo  '<a href="menu.php">Go back</a>'; 
?>