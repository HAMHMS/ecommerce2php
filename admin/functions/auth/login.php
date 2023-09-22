<?php 

session_start();

$username = $_POST['username'];
$password = $_POST['password']; // 123

include '../connect.php';

$read = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$query = $conn -> query($read);

// check users 

if ($query->num_rows > 0) {

	// get id 
	$user = $query -> fetch_assoc();
	$id = $user['id'];

	$_SESSION['login'] = $id ;
	header("location: ../../index.php");

}else{

	$_SESSION['error'] = "<div class='alert alert-danger'>Wrong credentials</div>";
	header("location: ../../login.php");

}

