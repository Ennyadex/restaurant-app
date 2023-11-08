
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET["id"];
$menu = $_GET["menu"];
$price = $_GET["price"];
$connection = mysqli_connect("Localhost","root","","tasty_restaurant");

echo  '<a href="menu.php">Go back</a>'; 
?>
<form method="post" action="submit_updatemenu.php">
     <input type="hidden" name="menuid" value="<?php echo $id  ?>">
    <input type="text" name="newmenu" value="<?php echo $menu ?>" placeholder="Enter New menu">
    <input type="number" name="newprice"value="<?php echo $price ?>" placeholder="Enter new price">
    <button>Update Menu</button>
</form>
</body>
</html>
