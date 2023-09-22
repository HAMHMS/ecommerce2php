<?php

$pro_id = $_POST['id'];

$name = $_POST['name'];
$price = $_POST['price'];
$sale = $_POST['sale'];
$stock = $_POST['stock'];

$imgName = $_FILES['image[]']['name'];
$temp = $_FILES['image[]']['tmp_name'];

//1- check if image uplodaded 
if ($_FILES['image[]']['error'] == 0 ) {
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
$cat = $_POST['cat'];

include '../connect.php';

$update = "UPDATE products SET 
    name = '$name', 
    price = '$price',
    sale = '$sale',
    image = '$newName',
    cat_id = '$cat'

    WHERE id = '$pro_id'";

if($query = $conn->query($update)){
    header("location: ../../products.php");
}else {
    echo $conn->error;
}

