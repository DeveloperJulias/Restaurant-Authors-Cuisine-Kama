<?php
include '../connection.php';

if (isset($_POST['register-product'])) {
    $menu = $_POST['menu'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    
    // Handle the file upload
    $image_name = $_FILES['product_image']['name'];
    $image_data = file_get_contents($_FILES['product_image']['tmp_name']);
    $image_data = mysqli_real_escape_string($conn, $image_data);
    
    $sql = "INSERT INTO product_registration (menu_name, date, price, author, menu_image_name, menu_image_data) 
            VALUES ('$menu', '$date', '$price', '$author', '$image_name', '$image_data')";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: ../order.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
