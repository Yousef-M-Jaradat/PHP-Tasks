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
        <p style="border: 2px solid black; width:150px ;display:inline-block ;margin-left:15px ;color:red ;text-align:center">
            <?php
            try {
                if (isset($_SESSION['Opp'])) {
                    echo $_SESSION['Opp'];
                } else {
                    throw new Error("Make A Calculation");
                }
            } catch (Error $e) {
                echo $e->getMessage();
            }
            ?>
        </p>
    </form>
</body>
</html>




