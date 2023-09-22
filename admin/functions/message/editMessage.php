<?php 


$id = $_POST['id'];
$mySpan = $_POST['mySpan'];




require 'connect.php';

$updateMsg = "UPDATE messages SET view = 1 WHERE id = $id";
$query = $conn -> query($updateMsg);

if($query){
	
	echo --$mySpan ;


} else {
	echo $conn -> error ;
}
