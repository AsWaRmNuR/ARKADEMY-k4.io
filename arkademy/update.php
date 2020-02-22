
<?php
require 'function.php';
if(isset($_POST['save'])){
   update();
}

?>
<?php require 'header_footer/header.php'?>
  <body>
  <?php 
  $id=$_GET['id'];
  $query=mysqli_query($konek_db,"SELECT * FROM produk WHERE id=$id");
  foreach($query as $val):
  ?>
    <div class="container">
      <form action="" method="POST" class="p-5 mt-5 border border-info" enctype="multipart/form-data">
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
                <input type="text" class="form-control" id="produk" placeholder="produk" name="name" value="<?=$val['name']?>">
            </div>
            <div class="form-group">
                <label for="price"><b>price</b></label>
                <input type="text" class="form-control" id="price" placeholder="price" name="price" value="<?=$val['price']?>">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="save">Save changes</button>
            </div>
      </form>
    </div>
  <?php endforeach ?>
  </body>
</html>