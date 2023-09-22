<?php

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];

include '../connect.php';
$update = "UPDATE slider SET 

            name = '$name',
            title = '$title'

            WHERE id = $id;
";

if ($conn -> query($update)) {
    header('location: ../../slider.php');
}else{
    echo $conn -> error;
}

?>    