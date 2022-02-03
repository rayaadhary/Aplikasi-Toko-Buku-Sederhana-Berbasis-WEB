<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">   
    <center>
    <div class="w3-panel w3-round-xxlarge w3-aqua">
		<h4>DATA TABEL PENJUALAN
	</div>
	<table class="w3-table-all">
	<thead>
	<tr class="w3-light-grey">
		<td><center>NO
		<td><center>ID
		<td><center>KODE BARANG
		<td><center>JUMLAH
		<td><center>NAMA PEMBELI
		<td><center>ALAMAT
		<td><center>KOTA
		<td><center>KODE POS
		<td><center>TELEPON
		<td><center>E-MAIL
		<td colspan=2><Center>ACTION
	</tr>
	</thead>
	<?php
		require ("koneksi.php");
		$sql="select * from penjualan";
		$hasil=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($hasil);
		$n = 1;
		do
		{
		list($id,$kodebrg,$jumlah,$namapembeli,$alamat,$kota,$kodepos,$telp,$email) = $row;
		echo "<tr><td align=center>$n
				<td align=center>$id
				<td align=center>$kodebrg
				<td align=center>$jumlah
				<td align=center>$namapembeli
				<td align=center>$alamat
				<td>$kota
				<td>$kodepos
				<td>$telp
				<td>$email";
		echo "<td align=center><a href='index2.php?p=deletepenjualan&id=$id'>Delete";
		$n++;
		}
		while($row=mysqli_fetch_row($hasil));
	?>
</html>