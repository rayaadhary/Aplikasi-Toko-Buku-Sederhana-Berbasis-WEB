<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <form action="index2.php?p=saveeditbarang" method=post>
    <center>
    <div class="w3-bar w3-round-xxlarge w3-green">
    <h4>EDIT DATA BARANG
    </div>
    <table border=1>
    <tr><td>
        <table border=0>
<?php
require ("koneksi.php");
$kodebrg = $_GET['kodebrg'];
$sql = "select * from barang where kodebrg='$kodebrg' ";
$hasil = mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
do 
{
    list($kodebrg,$namabarang,$harga,$stok)=$row;
    echo "<tr><td width=150>KODE BARANG<td width=100><input name=kodebrg value='$kodebrg' readonly size=20>";
    echo "<tr><td>NAMA BARANG<td><input name=namabarang value='$namabarang' size=20>";
    echo "<tr><td>HARGA<td><input name=harga value='$harga' size=20>";
    echo "<tr><td>STOK<td><input name=stok value='$stok' size=20>";
}
while ($row=mysqli_fetch_row($hasil));
?>
</table>
</table>
<hr width=400>
<hr width=400>
    <button class="w3-btn w3-round-xlarge w3-green">SAVE EDIT</button>
</html>