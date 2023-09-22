<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>id</th>
					<th>user_id</th>
					<th>product_id</th>
					<th>name</th>
					<th>price</th>
					<th>quantity</th>
					<th>controls</th>
				</tr>
			</thead>
		<tbody>

		<?php
		include "functions/connect.php";

		$selectCart = "SELECT * FROM cart";
		$queryCart = $conn -> query($selectCart);
		foreach($queryCart as $cart) {

		?>
						<tr>
							<td><?= $cart['id'] ?></td>
							<td><?= $cart['user_id'] ?></td>
							<td><?= $cart['product_id']?></td>
							<td><?= $cart['name'] ?></td>
							<td><?= $cart['price'] ?></td>
							<td><?= $cart['quantity'] ?></td>
							<td>
							<a class="btn btn-primary" href="?action=edit&id=<?= $cart['id'] ?>">Edit</a>
								<!-- <a class="btn btn-danger" href="functions/delete_product.php?id=<?= $pro['id'] ?>">Delete</a> -->

								<!-- Button trigger modal -->
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $cart['id'] ?>">
							  Delete
							</button>

							<!-- Modal -->
							<div class="modal fade" id="<?= $cart['id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        are you sure you want to delete <?= $cart['name'] ?>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <a href="functions/product/delete_product.php?id=<?= $cart['id'] ?>" class="btn btn-danger">confirm</a>
							      </div>
							    </div>
							  </div>
							</div>
							</td>
						</tr>
		    <?php } ?>
		</tbody>
</table>