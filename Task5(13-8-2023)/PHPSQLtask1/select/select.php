<?php
include "../connection/connection.php";

$sql = "SELECT * FROM crud WHERE 1";

$query = mysqli_query($connection, $sql);
?>
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

    <body>
        <div class="container">
            <h2 style='text-align:center'>Product List</h2>
            <table class="table table-bordered">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Rate</th>
                    <th>Update Product</th>
                    <th>Delete Product</th>
                </tr>
                <?php
                $row = mysqli_num_rows($query);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['PRODUCT_NAME'] . "</td>";
                        echo "<td>" . $row['PRODUCT_PRICE'] . "<b>$"."</td>";
                        echo "<td>" . $row['PRODUCT_RATE'] . "<b>/5</b>"."</td>";
                        echo "<td> <a class='btn btn-primary' href='http://localhost/conncetsql/update/update.php?id=" . $row['ID'] . "'>Update</a></td>";
                        echo "<td> <a class='btn btn-danger' href='http://localhost/conncetsql/delete/delete.php?id=" . $row['ID'] . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </table>
            <form action="../Insert/insert.php">
                <input class="btn btn-success" type="submit" value="Add Product">
            </form>
        </div>
    </body>
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