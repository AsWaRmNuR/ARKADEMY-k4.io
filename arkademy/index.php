
<?php
require 'function.php';
if(isset($_POST['cari'])){
  $row=cari($_POST['text_search']);
}else{
  $row=tanpilkan('SELECT a.id as id,c.name as cashier,b.name as category,a.name as produk,a.price as price
                FROM produk a JOIN category b on a.id_category=b.id JOIN cashier c on a.id_cashir=c.id');
}
?>
<?php require 'header_footer/header.php'?>
    <header>
      <div class="row">
        <div class="col-md-1">
          <h4 ">ARCADEMY</h4>
        </div>
        <div class="col-md-8 ml-5 mr-5">
          <form  action="" method="POST" >
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <button type="submit" name="cari">CARI</button>
              </div>
              <input type="text" class="form-control" placeholder="input yg di cari"  name="text_search" aria-label="" aria-describedby="basic-addon1">
            </div>
          </form>
        </div>
        <div class="col-md-1">
          <button type="button" class="btn_add btn btn-primary rounded "   data-toggle="modal" data-target="#add">add</button> 
        </div>
      </div>
    </header>

    <div class="container mt-3">
     <table class=" table table-borderd text-center">
            <thead>
              <tr>
                <th>cashir</th>
                <th>category</th>
                <th>produk</th>
                <th>price</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // $query="SELECT * from produk";
                foreach ($row as $data):
              ?>
              <tr>
                <td><?=$data['cashier']?></td>
                <td><?=$data['category']?></td>
                <td><?=$data['produk']?></td>
                <td>Rp.<?=number_format($data['price'])?></td>
                <td>
                  <a href="update.php?id=<?=$data['id'] ?>"  class="btn btn-warning" >edit</a>
                  <a href="delete.php?id=<?=$data['id'] ?>" class="btn btn-danger" onclick="return confirm('yakin')">hapus</a>
                </td>
              </tr>
                <?php endforeach; ?>
              
            </tbody>
     </table>   
    </div>
    <?php require 'add.php'?>
<?php require 'header_footer/footer.php'?>
