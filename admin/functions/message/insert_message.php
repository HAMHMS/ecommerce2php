<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

include 'connect.php';

$insert = "INSERT INTO messages (name, phone, email , message) VALUES ('$name', '$phone', '$email' , '$msg')";
$query = $conn -> query($insert)

$id = $conn -> insert_id() 
    
if($query){

echo "<tr>
      <td>10</td>
      <td>{$name}</td>
      <td>{$phone}</td>
      <td>{$email}</td>
      <td>{$msg}</td>
      <td>
       <a href='?id={$id}'></a>
      </td>
";         
}else{
    echo $conn -> error;
}

?>

