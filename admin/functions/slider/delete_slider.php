<?php

$id = $_GET['id'];

include '../connect.php';

$del = "DELETE FROM slider WHERE id = $id";

if ($conn -> query($del)) {

	header('location: ../../slider.php');

}else{

	echo $conn -> error;

}

