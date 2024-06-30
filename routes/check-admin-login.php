<?php
session_start();
include '../connection.php';
if(isset($_POST['email']) && isset($_POST['password'])){
   
   function validate($data){
    $data = trim($data);
    $data=stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   } 

$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)){
    header("Location:../admin-login.php?Error=Incorrect Username or  password ");
    exit();
}else if(empty($password)){
    header("Location:../admin-login.php?Error=Incorrect Username or  password ");
    exit();
}
else{
   $sql="SELECT * FROM admin_login WHERE email = '$email' AND password ='$password'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)===1){
    // echo "Start operating";
    $row=mysqli_fetch_assoc($result);
    // print_r($row);
    if($row['email'] === $email && $row['password'] === $password){
        echo "Logged In!";
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['id']=$row['id'];
        header("Location:../register-products.php");
        exit();

    }
   }
   else{
    header("Location:../admin-login.php?Error=Incorrect Username or  password ");
    exit();
   }
}
}
else{
    header("Location:../register-products.php");
    exit();
}

