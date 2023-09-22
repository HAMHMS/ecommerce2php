<form method="post" action="functions/product/insert_product.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="product-name">Product Image</label>
    <input type="file" name="image" value="" class="form-control" id="product-name">
  </div>
  <div class="form-group">
    <label for="product-price">Product Name</label>
    <input type="text" name="name" value="" class="form-control" id="product-price">
  </div>
  <div class="form-group">
    <label for="product-sale">Product Price</label>
    <input type="text" name="price" value="" class="form-control" id="product-sale">
  </div>
  <div class="form-group">
    <label for="product-sale">Product Sale</label>
    <input type="text" name="sale" value="" class="form-control" id="product-sale">
  </div>
	<div class="form-check form-check-inline">
	  <input class="form-check-input" type="radio"  name="stock" id="inlineRadio1" value="0" checked>
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
      
        include 'functions/connect.php'; 
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