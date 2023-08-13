<?php
include '../connection/connection.php';

$sql= "CREATE TABLE CRUD (
    ID INT AUTO_INCREMENT PRIMARY KEY ,
    PRODUCT_NAME VARCHAR(255) ,
    PRODUCT_PRICE VARCHAR(25) ,
    PRODUCT_RATE  FLOAT(4)
)";

if($connection->query($sql)){
    echo "The Table Successfully Created.";
}else{
    echo "There are some problems.";
}
?>