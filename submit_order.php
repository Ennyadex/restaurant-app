<?php
$menuname = $_POST["menuname"];
$menuqty =  $_POST["menuqty"];
$menuprice = $_POST["menuprice"];
$orderqty = $_POST["orderqty"];
$menuid = $_POST["menuid"];
$staff_id  = $_POST["staff_id"];
if($menuqty >= $orderqty){
    $finallqty = $menuqty - $orderqty;
    $orderprice = $orderqty * $menuprice;
    echo "Hi, you have request to buy ".$orderqty." ".$menuname."(s)  at the rate of $".$menuprice;
    echo "<br>";
    echo "Total amount for ".$orderqty." ".$menuname."(s) is $".$orderprice;
    $connection = mysqli_connect("Localhost","root","","tasty_restaurant");
    $sql = "UPDATE menu SET qty = $finallqty WHERE id =".$menuid;
    mysqli_query($connection,$sql);

    $sql2 = "INSERT INTO foodorder (menu_id,staff_id,menu_name,menu_qty,menu_price,total_price)
            VALUES('$menuid','$staff_id','$menuname','$menuqty','$menuprice','$orderprice')";
    $re = mysqli_query($connection,$sql2);
    //die(mysqli_error($connection));
    if(!$re){
        echo mysqli_error($connection);
    }

}else{
    echo "oops, We do not have the available quantity";
}
?>