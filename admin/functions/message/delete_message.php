<?php 

$id = $_GET['id'];

include 'connect.php';

$del = "DELETE FROM messages WHERE id = $id";

if ($conn -> query($del)) {
	header("location: ../message.php");
}else {
	echo $conn -> error ;
}






