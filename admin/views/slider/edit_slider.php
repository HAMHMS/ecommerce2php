<?php
$id = $_GET['id'];
include 'functions/connect.php';
$select = "SELECT * FROM slider WHERE id = $id";
$query = $conn -> query($select);
$slider = $query -> fetch_assoc();
?>
<form method="post" action="functions/slider/update_slider.php" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $slider['id'] ?>">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Images:</label>
        <input type="file" class="form-control" name="image" value="<?= $slider['image'] ?>">
    </div>
    <input type="hidden" name="old_img" value="<?= $slider['image'] ?>">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Name:</label>
        <input type="text" class="form-control" placeholder="Enter slider name" name="name" value="<?= $slider['name'] ?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Title:</label>
        <input type="text" class="form-control" placeholder="Enter slider title" name="title" value="<?= $slider['title'] ?>">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>