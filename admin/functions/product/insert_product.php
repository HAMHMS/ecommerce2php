<?php

/*
* 1- check if image uplodaded
* 2- specify image extension
* 3- specify image size  < 2m
* 4- change image name with random name
* 5- move uploaded image to the server
* 6- insert into database
*/
$imgName = $_FILES['image']['name'];
$temp = $_FILES['image']['tmp_name'];
//1- check if image uplodaded 
if ($_FILES['image']['error'] == 0){
	//2- specify image extension
	$extensions = ['jpg' , 'png' , 'gif'];
	$ext = pathinfo($imgName , PATHINFO_EXTENSION);

	if(in_array($ext, $extensions)) {

		// 3- specify image size  <2m
		if ($_FILES['image']['size'] < 2000000) {

			//4- change image name with random name
			$newName = md5(uniqid()) . "." . $ext ;

			move_uploaded_file($temp, "../../images/$newName");

		} else {

			echo 'file size is too big';
			die();
		}


	} else {

		echo 'wrong file extension';
		die();
	}

} else {

	echo 'you must upload an image';
	die();
}

$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$stock = $_POST['stock'];
$cat = $_POST['cat'];

include '../connect.php';

$insert = "INSERT INTO products (name , price , sale , stock , image , cat_id) VALUES ('$name' , '$price' , '$sale' , '$stock' , '$newName' , '$cat')";

$query = $conn -> query($insert);

if ($query) {
	header("location: ../../products.php");
}else {
	echo $conn-> error;
}





