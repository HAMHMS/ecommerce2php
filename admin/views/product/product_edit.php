<?php 
	
	$id = $_GET['id'];
	include 'functions/connect.php';
	$read = "SELECT * FROM products WHERE id = $id";
	$query = $conn -> query($read);
	$pro = $query -> fetch_assoc();
  
?>

<form method="post" action="functions/product/update_product.php">
	<input type="hidden" name="id" value="<?= $id ?>">
  <div class="form-group">
    <label for="product-name">name</label>
    <input type="text" name="name" value="<?= $pro['name'] ?>" class="form-control" id="product-name">
  </div>
  <div class="form-group">
    <label for="product-price">price</label>
    <input type="text" name="price" value="<?= $pro['price'] ?>" class="form-control" id="product-price">
  </div>
  <div class="form-group">
    <label for="product-sale">sale</label>
    <input type="text" name="sale" value="<?= $pro['sale'] ?>" class="form-control" id="product-sale">
  </div>
  <div class="form-group">
    <label for="product-image">image</label>
    <input type="file" multiple name="image[]" value="" class="form-control" id="product-image">
    <img style="width:100px; height: 100px;" src="images/<?= $pro['image'] ?>">

  </div>
  <input type="hidden" name="old_image" value="<?= $pro['image'] ?>">
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio"  name="stock" id="inlineRadio1" value="0" >
	  <label class="form-check-label" for="inlineRadio1">Empty</label>
	</div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio" name="stock" id="inlineRadio2" value="1" >
	  <label class="form-check-label" for="inlineRadio2">Stock</label>
	</div>
	<div class="form-group">
    <label for="product-category">Categories</label>
    <select name="cat" class="form-control" id="product-category">
    	<?php 
    	
    		$readCat = "SELECT * FROM categories";
    		$queryCat = $conn -> query($readCat);
    		foreach($queryCat as $category) {	
    			
    	?>
      <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
  		<?php } ?>
    </select>
	</div>
	
  <button type="submit" class="btn btn-primary">Submit</button>
</form>