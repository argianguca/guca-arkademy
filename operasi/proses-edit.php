<?php

include("config.php");


if(isset($_POST['edit'])){

    
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];


    $sql = "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id_produk=$id_produk";
    $query = mysqli_query($db, $sql);


    if( $query ) {

        header('Location:../index.php');
    } else {

        die("Failed to save the data!");
    }
}
?>

