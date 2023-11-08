<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome to menu Page</h1>
    <br>
    <?php include('link.php'); ?>

    <form method="post" action="submit_menu.php">
        <label>Add menu</label>
        <input type="text" name="menu" placeholder="Enter your menu">
        <input type="number" name="price" placeholder="Enter price">
        <button>Add menu</button>
    </form>

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
                <td>
                    ACTION
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
                    <td><a href="deletemenu.php?id='.$rows["id"].'">Delete |
                    <a href="updatemenu.php?id='.$rows["id"].'&menu='.$rows["menu"].'&price='.$rows["price"].'">Update
                    </a></td>
            </tr>
                ';
                $count++;
            }
        ?>
        </tbody>
    </table>
</body>
</html>