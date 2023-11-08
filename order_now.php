<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>MAKE YOUR CHOICE</h1>
    <br>
    <form action="submit_order.php" method="POST">
    <table width="1000px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
                </td>
                <td>
                    SELECT STAFF
                </td>
                <td>
                    MENU
                </td>
                <td>
                  MENU QUANTITY
                </td>
                <td>
                   PRICE
                </td>
                <td>
                    QUANTITY TO ORDER
                </td>
                <td>
                    ACTION
                </td>
               
            </tr>
        </thead>
        <tbody>
       
        <?php 
        
        $count =1;
            $dbconnect = mysqli_connect("localhost","root","","tasty_restaurant");
            $sql = "SELECT  menu.id as menuid,menu,price,qty FROM menu WHERE menu.id =" .$_GET["menuid"];
            $r = mysqli_query($dbconnect,$sql);
            while($rows = mysqli_fetch_assoc($r)){
               
               
              echo' 
              <tr>
                    <td>'.$count.' <input type="hidden" name="menuid" value="'.$rows["menuid"].'"></td>
                    <td><select name="staff_id">';
                ?>
                <?php
                $db = mysqli_connect("localhost","root","","tasty_restaurant");
                $s = "SELECT * FROM staff";
                $ra = mysqli_query($db,$s);
                while($row = mysqli_fetch_assoc($ra)){
                    echo '<option value='.$row["id"].'>'.$row["sname"].'</option>';
                }
               
                    ?>
               <?php
                echo '</select></td>
                    <td><input type="text" name="menuname" value="'.$rows["menu"].'" readonly></td>
                    <td><input type="text" name="menuqty" value="'.$rows["qty"].'" readonly></td>
                    <td><input type="text" name="menuprice" value="'.$rows["price"].'" readonly></td>
                    <td><input type="number" name="orderqty" placeholder="Enter quanity"></td>
                    <td><button> order</button></td>
            </tr>
                ';
                $count++;
            }
        ?> 
        </tbody>
    </table>
    </form>
    <a href="order.php">back</a>
</body>
</html>