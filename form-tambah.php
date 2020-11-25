<!DOCTYPE html>
<html>
<head>
    <title>TAMBAHKAN PRODUK</title>
</head>

<body>
    <p><a href="../index.php">KEBALI KE STOCK PRODUK</a></p>

    <form action="operasi/proses-tambah.php" method="POST" onsubmit="return alert('BARANG TELAH DITAMBAHKAN!');">
        <p>
            <label for="nama_produk">Nama Barang &nbsp &nbsp: </label>
            <input type="text" name="nama_produk"/>
        </p>
        <p>
            <label for="keterangan">Keterangan &nbsp &nbsp &nbsp &nbsp: </label>
            <input type="text" name="keterangan"/>
        </p>
        <p>
            <label for="harga">Harga &nbsp &nbsp &nbsp &nbsp: </label>
            <input type="text" name="harga"/>
        </p>
        <p>
            <label for="jumlah">Jumlah &nbsp &nbsp &nbsp &nbsp: </label>
            <input type="text" name="jumlah"/>
        </p>
        <p>
            <input type="submit" value="Tambah Produk" name="tambah" />
        </p>

    </form>
    <script>
        
    </script>
    
    <?php if(isset($_GET['status'])): ?>
    <p>
    <?php
      if($_GET['status'] == 'sukses') {
        echo "PRODUK SUKSES DITAMBAHKAN! <a href='index.php'>LIHAT STOCK PRODUK</a>";
            }
        ?>
    </p>
    <?php endif; ?>

</body>
</html>

