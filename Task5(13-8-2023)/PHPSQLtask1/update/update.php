<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Update Product</h2>
        <?php
        include "../connection/connection.php";

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Retrieve product data for the provided ID
            $select_sql = "SELECT * FROM CRUD WHERE ID = '$id'";
            $result = mysqli_query($connection, $select_sql);
            $row = mysqli_fetch_assoc($result);

            echo "<form action='../update/process.php?id=" . $id . "' method='post' class='mt-3'>";
            echo "<div class='form-group'>";
            echo "<label for='productName'>Product Name:</label>";
            echo "<input type='text' class='form-control' id='productName' name='productName' value='" . $row['PRODUCT_NAME'] . "'>";
            echo "<label for='productPrice'>Product Price:</label>";
            echo "<input type='text' class='form-control' id='productPrice' name='productPrice' value='" . $row['PRODUCT_PRICE'] . "'>";
            echo "<label for='productRate'>Product Rate:</label>";
            echo "<input type='text' class='form-control' id='productRate' name='productRate' value='" . $row['PRODUCT_RATE'] . "'>";
            echo "</div>";
            echo "<button type='submit' class='btn btn-primary' name='submit'>Update</button>";
            echo "</form>";
        } else {
            echo "<p class='mt-3'>ID not provided for update.</p>";
        }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
