<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <center>
    <div class="w3-bar w3-round-xxlarge w3-green">
    <h4>INFORMASI EDIT DATA BARANG
    </div>
    <hr width=320>
    <table>
<?php
    require ("koneksi.php");
    $kodebrg = $_POST['kodebrg'];
    $namabarang = $_POST['namabarang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    echo "<tr><td>Kode Barang<td>$kodebrg";
    echo "<tr><td>Nama Barang<td>$namabarang";
    echo "<tr><td>Harga<td>$harga";
    echo "<tr><td>Stok<td>$stok";
    echo "</table>";
    echo "<hr width=320>";  
    $sql = "update barang set namabarang='$namabarang',harga='$harga',stok='$stok' where kodebrg='$kodebrg' ";
    $hasil = mysqli_query($conn,$sql);
?>
 </table>
    <div class="w3-bar w3-green">
    Data Barang Sudah di Edit
    </div>
    <br>
    <a class="w3-btn w3-round-xxlarge w3-red" href="index2.php">BACK
</html>