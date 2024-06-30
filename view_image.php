<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT menu_image_data FROM product_registration WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        header("Content-Type: image/jpeg"); // Adjust the content type based on your image type
        echo $row['menu_image_data'];
    } else {
        echo "Image not found.";
    }
} else {
    echo "No image ID provided.";
}

mysqli_close($conn);
?>
