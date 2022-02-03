<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <form action="index2.php?p=savedeletepenjualan" method=post>
    <center>
    <div class="w3-panel w3-round-xxlarge w3-green">
    <h4>DELETE DATA PENJUALAN
    </div>
    <table border=1>
    <tr><td>
        <table border=0>
<?php
require ("koneksi.php");
$id = $_GET['id'];
$sql = "select * from penjualan where id='$id' ";
$hasil = mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
do 
{
    list($id,$kodebrg,$jumlah,$namapembeli)=$row;
    echo "<tr><td width=150>ID PENJUALAN<td width=100><input name=id value='$id' readonly size=20>";
    echo "<tr><td>KODE BARANG<td><input name=kodebrg value='$kodebrg' size=20>";
    echo "<tr><td>JUMLAH<td><input name=jumlah value='$jumlah' size=20>";
    echo "<tr><td>NAMA PEMBELI<td><input name=namapembeli value='$namapembeli' size=20>";
}
while ($row=mysqli_fetch_row($hasil));
?>
</table>
</table>
<hr width=400>
    <button class="w3-btn w3-round-xlarge w3-green">SAVE DELETE</button>
</html>