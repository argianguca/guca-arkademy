<?php

include("config.php");


if(isset($_POST['tambah'])){

    
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];



    $sql = "INSERT INTO produk (id_produk, nama_produk, keterangan, harga, jumlah) VALUE ('$id_produk', '$nama_produk', '$keterangan', '$harga', '$jumlah')";
    $query = mysqli_query($db, $sql);


    if( $query) {

        header ('Location:../form-tambah.php?status=sukses');
            }
}
?>