<?php
include '../connection.php';
if(isset($_POST['register-product'])){
    $menu=$_POST['menu'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $author=$_POST['author'];

// var_dump('$menu','$date','$price','$author');
if(!$conn){
    die("ConnectionFailure:" .mysqli_connect_error());

}
$mysql="INSERT INTO product_registration(product_name,price,date,author)VALUES('$menu','$price','$date',' $author')";
$totalconnection=mysqli_query($conn,$mysql);
if($totalconnection){
    header('Location:../order.php');
    // echo "ready";
}
else{
    echo "Invalid";

}

}

