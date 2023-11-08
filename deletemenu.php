<?php
$id = $_GET["id"];
$connect = mysqli_connect("localhost","root","","tasty_restaurant");
$sql = "DELETE FROM menu WHERE id=".$id ;
mysqli_query($connect,$sql);
echo "menu deleted successfully";
echo "<br>";
echo '<a href = "menu.php">Go back </a>';

?>