<a class="btn btn-primary" href="?action=add">Add Slider</a>
        <br>
        <br>
<table class="table table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>image</th>
              <th>name</th>
              <th>title</th>
              <th>controls</th>
            </tr>
          </thead>
          <tbody>
    <?php

    include "functions/connect.php";
    $select = "SELECT * FROM slider";
    $query = $conn -> query($select);
    foreach($query as $slider) {
    ?>
            <tr>
              <td><img style="width:100px" src="images/<?= $slider['image'] ?>" alt=""></td>
              <td><?= $slider['name'] ?></td>
              <td><?= $slider['title'] ?></td>
              <td>
                <a class="btn btn-primary" href="?action=edit&id=<?= $slider['id'] ?>">Edit</a>
                <!-- <a class="btn btn-danger" href="functions/delete_product.php?id=<?= $slider['id'] ?>">Delete</a> -->

                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $slider['id']  ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $slider['id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure you want to delete <?= $slider['name'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/slider/delete_slider.php?id=<?= $slider['id'] ?>" class="btn btn-danger">confirm</a>
      </div>
    </div>
  </div>
</div>
              </td>
            </tr>
    <?php } ?>
          </tbody>
        </table>