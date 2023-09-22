<?php

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if (empty($fname)) {
    $_SESSION['fname_error'] = 'please enter First Name';
    header('location: ../../register.php');
    exit();
}
if (empty($lname)) {
    $_SESSION['lname_error'] = 'please enter Last Name';
    header('location: ../../register.php');
    exit();
}
if (empty($username)) {
    $_SESSION['username_error'] = 'please enter username';
    header('location: ../../register.php');
    exit();
}
if (empty($email)) {
    $_SESSION['email_error'] = 'please enter email';
    header('location: ../../register.php');
    exit();
}
if (empty($address)) {
    $_SESSION['address_error'] = 'please enter address';
    header('location: ../../register.php');
    exit();
}
if (empty($phone)) {
    $_SESSION['phone_error'] = 'please enter phone';
    header('location: ../../register.php');
    exit();
}
if (empty($password)) {
    $_SESSION['password_error'] = 'please enter password';
    header('location: ../../register.php');
    exit();
}

include '../connect.php';

// Check if the email exists in the database
$query = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['email_error'] = 'Email already registered. Please choose a different email.';
    header('location: ../../register.php');
    exit();
}

$insert_users = "INSERT INTO users (username, password, email, address, phone) VALUES ('$username', '$password', '$email', '$address', '$phone')";
$query_users = $conn->query($insert_users);

if ($query_users) {
    header('location: ../../index.php');
    exit();
} else {
    echo $conn->error;
}

// Close the database connection
$conn->close();

?>





