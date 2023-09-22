<?php

include "../connect.php";

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display cart items
    while($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["name"] . "<br>";
        echo "User ID: " . $row["user_id"] . "<br>";
        echo "Product ID: " . $row["product_id"] . "<br>";
        echo "Price: " . $row["price"] . "<br><br>";
    }
} else {
    echo "Cart is empty.";
}

$conn->close();

?>