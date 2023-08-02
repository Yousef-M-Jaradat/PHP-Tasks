<?php
session_start();

    echo "<h1>Welcome, ".$_SESSION['username']."</h1><br><br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="calcprocces.php">
        <label for="Number1">Number1: </label>
        <input type="number" name="Number1">
        <br><br>
        <label for="Number2">Number2: </label>
        <input type="number" name="Number2">
        <br><br>
        <input type="submit" value="+" name="Add">
        <input type="submit" value="-" name="Div">
        <input type="submit" value="*" name="Mul">
        <input type="submit" value="/" name="Sub">
        <br><br>
        <label for="Result">Result: </label>
        <input type="number" name="Result" value="55">
    </form>
</body>
</html>



