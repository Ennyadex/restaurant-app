<?php
$email  =  $_POST["email"];
echo "<br>";

$pass_word =  $_POST["pass_word"];
echo "<br>";

$connection = mysqli_connect("Localhost","root","","tasty_restaurant");
if ($connection){
$query = "SELECT * FROM signup WHERE email= '$email'and pass_word='$pass_word'";
$result = mysqli_query($connection,$query);
$num = mysqli_num_rows($result);
if($num > 0){
    if($result ->num_rows >0){
    header('location:home2.php');
}
}else{
     echo "PLEASE SIGNUP";
}
}
?>