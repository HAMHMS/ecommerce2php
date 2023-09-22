<?php 

$id = $_GET['id'];

include '../connect.php';

$del = "DELETE FROM products WHERE id = $id";

if ($conn -> query($del)) {
	header("location: ../../products.php");
}else {
	echo $conn -> error ;
}






