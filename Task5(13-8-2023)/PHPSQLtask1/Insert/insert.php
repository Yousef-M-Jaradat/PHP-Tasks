<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <head>
        <title>Insert Data Form</title>
    </head>
    <div class="container">
        <h2 style='text-align:center'>Insert Data</h2>
        <form action="insert.php" method="post">
            <div class="form-group">
                Product Name: <input class="form-control" type="text" name="productName"><br>
                Product Price: <input class="form-control" type="text" name="productPrice"><br>
                Product Rate: <input class="form-control" type="text" name="productRate"><br>
                <input type="submit" class="btn btn-primary" value="Insert" name="submit">
            </div>
            <div class="form-group">
        </form>
        <form action="../select/select.php">
            <input class="btn btn-secondary" type="submit" value="veiw products">
        </form>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
include '../connection/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['productName'] != "" && $_POST['productPrice'] != "" && $_POST['productRate'] != "") {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productRate = $_POST['productRate'];

    $sql = "INSERT INTO crud (PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_RATE) VALUES ('$productName', '$productPrice', '$productRate ')";

    if ($connection->query($sql) === true) {
        echo "The Product Successfully inserted.";
    } else {
        echo "There are some problems.";
    }
} else {
    echo "<din class='container'>";
    echo "fill the form";
    echo "</din>";
}
?>