<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <center>
    <div class="w3-bar w3-round-xxlarge w3-green">
    <h4>INFORMASI DELETE DATA PENJUALAN
    </div>
    <hr width=320>
    <table>
<?php
    require ("koneksi.php");
    $id = $_POST['id'];
    $kodebrg = $_POST['kodebrg'];
    $namapembeli = $_POST['namapembeli'];
    echo "<tr><td>id<td>$id";
    echo "<tr><td>Kode Barang<td>$kodebrg";
    echo "<tr><td>Nama Pembeli<td>$namapembeli";
    echo "</table>";
    echo "<hr width=320>";  
    $sql = "delete from penjualan where kodebrg='$kodebrg' ";
    $hasil = mysqli_query($conn,$sql);
?>
 </table>
    <div class="w3-bar w3-green">
    Data Barang Sudah di Delete
    </div>
    <br>
    <a class="w3-btn w3-round-xxlarge w3-red" href="index2.php">BACK
</html>