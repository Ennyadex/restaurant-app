<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
body{
        background-image:url('menu_image.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color:green;
        text-align: center;
}

table tr td{
            width: 100px;
            height: 30px;
            background-color: white;
            color: green;
        }    
    </style>
</head>
<body>
    <h1> ORDER NOW</h1>
    <br>
    
<?php 
echo "<br>";
echo  '<a href="home.php" style="color:blue">GO BACK TO HOME PAGE</a>'; 
?>
    <table width="900px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
                </td>
                <td>
                    MENU
                </td>
                <td>
                    PRICE
                </td>
                
                <td>
                    QUANTITY
                </td>
                <td>
                    ACTION
                </td>
            </tr>
        </thead>
        <tbody>
        <?php 
        $count =1;
        $msg = "";
            $dbconnect = mysqli_connect("localhost","root","","tasty_restaurant");
            $sql = "SELECT menu.id as menuid,menu,price,qty FROM menu ";
             $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               if($rows["qty"] == 0){
                    $msg = "Quantity not available";
               }else{
                $msg = $rows["qty"];
               }
               
              echo' 
              <tr>

                    <td>'.$count.'</td>
                    <td>'.$rows["menu"].'</td>
                    <td>'.$rows["price"].'</td>
                    <td>'.$msg.'</td>
                    <td>
                    <a href="trynow.php?menuid='.$rows["menuid"].'">Order Now</a>
                    </td>
            </tr>
                ';
                $count++;
            }
        ?> 
        </tbody>
    </table>
</body>
</html>