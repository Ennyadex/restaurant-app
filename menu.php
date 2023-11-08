<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
h1{
    color: blue;
}

body{
        background-image:url('menu_image.jpeg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        text-align: center;
}  

table{
            width: 600px;
            margin-left: 300px;


        }
        table tr th{
            width: 100px;
            height: 30px;
            color: blue;
            background-color: white;
        }
        table tr td{
            width: 100px;
            height: 30px;
            background-color: white;
            color: blue;
        }    
    </style>
</head>
<body>
    <h1>WELCOME TO TASTY MENU PAGE</h1>
    <br>
    
<?php 
echo "<br>";
echo  '<a href="home.php" style="color:blue">GO BACK TO HOME PAGE</a>'; 
?>

    <table width="400px" style="margin: auto;">
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
            </tr>
        </thead>
        <tbody>
        <?php 
        $count =1;
            $dbconnect = mysqli_connect("localhost","root","","tasty_restaurant");
            $sql = "SELECT * FROM menu";
           
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               
               
              echo' 
              <tr>
                    <td>'.$count.'</td>
                    <td>'.$rows["menu"].'</td>
                    <td>'.$rows["price"].'</td>
            </tr>
                ';
                $count++;
            }
        ?>
        </tbody>
    </table>
    
</body>
</html>