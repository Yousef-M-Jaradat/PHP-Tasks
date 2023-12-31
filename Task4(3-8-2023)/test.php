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
    <style>
        table > tbody >tr > td > img {
            width: 100px;
        }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Details</th>
                <th scope="col">Product Date</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Active</th>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();

            if (isset($_SESSION['Products'])) {
                $products = $_SESSION['Products'];
            } else {
                $products = array();
            }

            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['Product_Name'] . "</td>";
                echo "<td>" . $product['Product_Details'] . "</td>";
                echo "<td>" . $product['Product_Date'] . "</td>";
                echo "<td>";
                if (!empty($product['Product_Image'])) {
                    echo "<img src='" . $product['Product_Image'] . "' alt='Product Image'>";
                } else {
                    echo "No Image";
                }
                echo "</td>";
                echo "<td>" . $product['Product_Active'] . "</td>";
                echo "</tr>";
            }

            if (empty($products)) {
                echo "<tr><td colspan='5'>No products found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
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
