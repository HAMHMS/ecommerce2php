<?php

$userId = $_POST['user_id'];
$productId = $_POST['product_id'];
$productName = $_POST['name'];
$price = $_POST['price'];

include 'connect.php';
$sql = "INSERT INTO cart (user_id, product_id, product_name, price) VALUES ('$userId', '$productId', '$productName', '$price')";

if ($conn->query($sql) === TRUE) {
    // Insert successful
    echo "success";
} else {
    // Error inserting into the database
    echo "error";
}

$conn->close();
?>