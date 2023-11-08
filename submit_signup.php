<?php
$fname =  $_POST["fname"];
$lname = $_POST["lname"];
$uname  =  $_POST["uname"];
$email =  $_POST["email"];
$pass_word =  $_POST["pass_word"];
$psw_repeat = $_POST["psw_repeat"];

$hps = sha1($pass_word);
echo $hps;

if ($pass_word == $psw_repeat){
    $connection = mysqli_connect("localhost","root","","tasty_restaurant");
    if($connection){
        $chk = "SELECT email FROM signup WHERE email = '$email'";
        $r = mysqli_query($connection,$chk);
        if($r->num_rows > 0){
            header("location:error.php");
        }
        
    $sql = "INSERT INTO signup (firstname,lastname,username,email,pass_word) 
    values('$fname','$lname','$uname','$email','$pass_word')";
    $result = mysqli_query($connection,$sql);
    if ($result){
        header("location:home2.php");
   }else{
    echo mysqli_error($connection);
  }
}
}else{
    echo "password do not match";
}

?>