<?php
include "../connection/connection.php";

if (isset($_GET['id']) && isset($_POST['submit'])) {
    $id = $_GET['id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productRate = $_POST['productRate'];

    // Update the data
    $sql = "UPDATE CRUD SET PRODUCT_NAME = '$productName', PRODUCT_PRICE = '$productPrice', PRODUCT_RATE = '$productRate' WHERE ID = '$id'";

    if (mysqli_query($connection, $sql)) {
        echo "Record updated successfully";
        header("location:http://localhost/PHP-Tasks/Task5(13-8-2023)/PHPSQLtask1/select/select.php?");
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
} else {
    echo "ID not provided for update.";
}
?>
