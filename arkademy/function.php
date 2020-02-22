<?php
    $konek_db=mysqli_connect('localhost','root','','arcademy_db')or die("ada yang bermasala pada = " . mysqli_connect_error());

    function tanpilkan($query){
        global $konek_db;
        $result=mysqli_query($konek_db,$query);
        $data=[];
        while ($val=mysqli_fetch_assoc($result)) {
          $data[]=$val;
        } return $data;
    }
    function add($data){
        global $konek_db;
        $name=htmlspecialchars($data['name']);
        $price=htmlspecialchars($data['price']);
        $id_category=htmlspecialchars($data['id_category']);
        $id_cashir=htmlspecialchars($data['id_cashir']);
        $data="INSERT INTO `produk`( `name`, `price`, `id_category`, `id_cashir`) VALUES ('$name','$price','$id_category','$id_cashir')";
        mysqli_query($konek_db,$data); 
        return mysqli_affected_rows($konek_db);//mysqli_affected_rows() =akan mengecek apakah rows filenya bertamba atau tidak
    }
    function update(){
        global $konek_db;
        $id=htmlspecialchars($_GET['id']);
        $name=htmlspecialchars($_POST['name']);
        $price=htmlspecialchars($_POST['price']);
        $id_category=htmlspecialchars($_POST['id_category']);
        $id_cashir=htmlspecialchars($_POST['id_cashir']);
    
        $data="UPDATE `produk` SET `name`='$name',`price`='$price',`id_category`='$id_category',`id_cashir`='$id_cashir' WHERE id='$id'";
        mysqli_query($konek_db,$data);
        
    }
    function cari($data){
        $query="SELECT a.id as id,c.name as cashier,b.name as category,a.name as produk,a.price as price
                FROM produk a JOIN category b on a.id_category=b.id JOIN cashier c on a.id_cashir=c.id	
                WHERE b.name LIKE '%$data%' OR
                      c.name LIKE '%$data%' OR
                      a.name LIKE '%$data%'  
                      ";
        return	tanpilkan($query);
    }

?>