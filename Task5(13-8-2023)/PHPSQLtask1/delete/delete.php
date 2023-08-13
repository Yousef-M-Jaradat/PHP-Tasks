<?php
include "../connection/connection.php"; // Include your database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM crud WHERE ID = '$id'";
    $result = mysqli_query($connection, $delete_sql);

    if ($result) {
        header("Location: http://localhost/conncetsql/select/select.php"); // Redirect back to the main page
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
} else {
    echo "ID not provided for deletion.";
}
?>
