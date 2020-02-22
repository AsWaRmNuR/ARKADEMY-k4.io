<?php
require 'function.php';
    $id=$_GET['id'];
    mysqli_query($konek_db,"DELETE FROM `produk` WHERE id='$id' ");
    header('location:index.php');
?>