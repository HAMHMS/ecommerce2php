<?php 

$id= $_POST['id'];

include 'connect.php';

$update = "UPDATE messages SET view = 1 WHERE id = $id";

if ($conn -> query($update)){

header('location: ../message.php');

}else{
	echo $conn -> error;
}