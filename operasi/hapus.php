<?php

include("config.php");

if(isset($_GET['id']) ){


    $id_produk = $_GET['id'];


    $sql = "DELETE FROM produk WHERE id_produk=$id_produk";
    $query = mysqli_query($db, $sql);

    if ($query) {
    	header ('Location:../index.php');
    }
}

?>