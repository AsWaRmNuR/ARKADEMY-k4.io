
<?php
if(isset($_POST['save_add'])){

 if(add($_POST)>0){
  echo "<script>
        alert('ok');
        document.location.href='index.php';
      </script>";
 }else{
  echo "<script> alert('gagal') </script>";
 }
}
?>
<!-- add Modal -->
<form action="" method="POST">
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
          <label for="chsr"><b>cashier</b></label>
          <select class="form-control" id="chsr" name="id_cashir">
                  <?php 
                  $query=mysqli_query($konek_db,"SELECT * FROM cashier");
                  foreach($query as $data){
                  ?>
                  <option value="<?=$data['id']?>"><?=$data['name']?></option>
                  <?php }?>
              </select>
          </div>
          <div class="form-group">
              <label for="ctgr"><b>category</b></label>
              <select class="form-control" id="ctgr" name="id_category">
                  <?php 
                  $query=mysqli_query( $konek_db,"SELECT * FROM category");
                  foreach($query as $data){
                  ?>
                  <option value="<?=$data['id']?>"><?=$data['name']?></option>
                  <?php }?>
              </select>
          </div>
          <div class="form-group">
              <label for="produk"><b>produk</b></label>
              <input type="text" class="form-control" id="produk" placeholder="produk" name="name" required>
          </div>
          <div class="form-group">
              <label for="price"><b>price</b></label>
              <input type="text" class="form-control" id="price" placeholder="price" name="price" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save_add">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- end add -->