<?php include("operasi/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>STOCK BARANG</title>
    <style>
        tr, td {
            padding-right:60px;
        }

        th {
            text-align:center;
        }
    </style>

    <script language="JavaScript" type="text/javascript">
    function checkDelete(){
    return confirm('Are you sure?');
    }
</script>
</head>

<body>
    <nav>
        <a href="form-tambah.php">(+) Tambahkan Produk</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th colspan="2">Edit/Hapus</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($dataproduk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$dataproduk['nama_produk']."</td>";
            echo "<td>".$dataproduk['keterangan']."</td>";
            echo "<td>".$dataproduk['harga']."</td>";
            echo "<td>".$dataproduk['jumlah']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$dataproduk['id_produk']."'>Edit</a> | ";
            echo "<a href='operasi/hapus.php?id=".$dataproduk['id_produk']."' onclick='return checkDelete()'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

</body>
</html>

<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "PRODUK SUDAH DITAMBAHKAN!";
            } else {
                echo "PRODUK GAGAL DITAMBAHKAN!";
            }
        ?>
    </p>
<?php endif; ?>

