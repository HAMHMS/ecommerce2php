<a class="btn btn-primary" href="?action=add">Add product</a>
				<br>
				<br>
<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>price</th>
					<th>sale</th>
					<th>stock</th>
					<th>image</th>
					<th>category</th>
					<th>controls</th>
				</tr>
			</thead>
		<tbody>

		<?php

		include "functions/connect.php";
		$select = "SELECT * FROM products";
		$query = $conn -> query($select);
		foreach($query as $pro) {

		?>
						<tr>
							<td><?= $pro['id'] ?></td>
							<td><?= $pro['name'] ?></td>
							<td><?= $pro['price'] ?></td>
							<td><?= $pro['sale'] ?></td>
							<td><?= $pro['stock'] ?></td>
							<td><img style="width:100px" src="images/<?= $pro['image'] ?>" alt=""></td>
							<td>
							<?php

							$cat_id = $pro['cat_id'] ;
							$selectCat = "SELECT name FROM categories WHERE id = $cat_id"; 
							$queryCat = $conn -> query($selectCat);
							$category = $queryCat -> fetch_assoc();
							echo $category['name'];

                            ?>
							</td>
							<td>
							<a class="btn btn-primary" href="?action=edit&id=<?= $pro['id'] ?>">Edit</a>
								<!-- <a class="btn btn-danger" href="functions/delete_product.php?id=<?= $pro['id'] ?>">Delete</a> -->

								<!-- Button trigger modal -->
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $pro['id'] ?>">
							  Delete
							</button>

							<!-- Modal -->
							<div class="modal fade" id="<?= $pro['id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        are you sure you want to delete <?= $pro['name'] ?>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <a href="functions/product/delete_product.php?id=<?= $pro['id'] ?>" class="btn btn-danger">confirm</a>
							      </div>
							    </div>
							  </div>
							</div>
							</td>
						</tr>
		    <?php } ?>
		</tbody>
</table>