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
        background-image:url('home2image.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }
        
       
    </style>
    
</head>
<body>
  <h1> WELCOME TO TASTY RESTAURANT </h1>
    <?php include('link2.php');?>
    
</body>
</html>