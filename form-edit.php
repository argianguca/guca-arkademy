<?php

include("operasi/config.php");

if(!isset($_GET['id'])){
    header('Location: ../index.php');
}

$id_produk = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
$query = mysqli_query($db, $sql);
$dataproduk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if(mysqli_num_rows($query) < 1 ){
    die("data can't be found!");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Form</title>
</head>

<body>
    <form action="operasi/proses-edit.php" method="POST" onsubmit="return alert('BARANG SUDAH DIEDIT!');">

            <input type="hidden" name="id_produk" value="<?php echo $dataproduk['id_produk'] ?>" />
            <p><a href="index.php">Kembali</a></p>
        <p>
            <label for="nama">Nama Produk &nbsp &nbsp: </label>
            <input type="text" name="nama_produk" value="<?php echo $dataproduk['nama_produk'] ?>" />
        </p>
        <p>
            <label for="keterangan">Keterangan &nbsp &nbsp: </label>
            <input type="text" name="keterangan" value="<?php echo $dataproduk['keterangan'] ?>" />
        </p>
        <p>
            <label for="harga">Harga &nbsp &nbsp &nbsp &nbsp: </label>
            <input type="text" name="harga" value="<?php echo $dataproduk['harga'] ?>"/>
        </p>
        <p>
            <label for="jumlah">Jumlah &nbsp &nbsp &nbsp &nbsp: </label>
            <input type="text" name="jumlah" value="<?php echo $dataproduk['jumlah'] ?>"/>        
        </p>
        <p>
            <input type="submit" value="Edit" name="edit" />
        </p>

    </form>
    <html>


    </body>
</html>
