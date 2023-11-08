<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    
    <style>
h1{
  color: blue;
  text-align: center;
}   
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li {
  float: left;
}

li a {
  display: block;
 background-color: #dddddd;
  text-align: center;
  padding: 8px;
  text-decoration: none;
  opacity: 0.5;
  color: darkgreen;
}

li a:hover:not(.active) {
  background-color: #111;
}
        body{
        background-image:url('tasty_image.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        }
        
        .container{
                text-align: center;
                margin: 10px;
                padding: 10px;
                font-size: 30px;
                font-family: 'Times New Roman';
                border: 10px;
                border-radius: 45px;
                color:blue;
            }
    </style>
    
</head>
<body>
  <h1> WELCOME TO TASTY RESTAURANT </h1>
    <?php include('link.php');?>
    
<form action="action_page.php" method="post">

  <div class="container">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email Address" name="email" required>

    <label for="pass_word"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass_word" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" style= "color:red" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    
</body>
</html>