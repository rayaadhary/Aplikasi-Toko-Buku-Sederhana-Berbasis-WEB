<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <center>
    <hr width=320>
    <div class="w3-panel w3-round-xxlarge w3-cyan">
    <h4>Informasi Data Barang
    </div>
    </font>
    <hr width=320>
    <table>
    <?php
    require ("koneksi.php");
    $kodebrg = $_POST['kodebrg'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stok =$_POST['stok'];

    echo "<tr><td>KODE BARANG<td>: $kodebrg";
    echo "<tr><td>NAMA BARANG<td>: $namabarang";
    echo "<tr><td>HARGA<td>: $harga";
    echo "<tr><td>STOK<td>: $stok";
    echo "</table>";
    echo "<hr width=320>";
    if($kodebrg!=''){
        $sql="insert into barang values('$kodebrg','$namabarang','$harga','$stok')";
        $hasil=mysqli_query($conn,$sql);
        echo "Data Telah Ditambahkan";
     }
    else{
        echo "Data Barang Tidak Boleh Kosong";
    }
    ?>
    <hr width=320>
    <a class="w3-btn w3-round-xxlarge w3-cyan" href="index2.php">BACK
</html>