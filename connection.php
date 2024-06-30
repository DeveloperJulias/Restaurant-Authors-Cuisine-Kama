<?php
$conn=mysqli_connect('localhost','root','','kama_restaurant');
if(!$conn){
    die("ConnectionFailure:" .mysqli_connect_error());
}