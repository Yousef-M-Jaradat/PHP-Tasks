<?php
session_start();

if (isset($_GET['username']) && isset($_GET['password']) && $_GET['username'] !== "" && ($_GET['password'] !== "")) {
    $_SESSION['username'] = $_GET['username'];
    header('Location: calculator.php');
    exit;
}else {
    // Invalid credentials, show an error message
    echo "Invalid username or password. <a href='http://localhost/PHP-Tasks/Tasks3(2-8-2023)/calaculator/calcLogin.php'>Please try again.</a>";
}
?>