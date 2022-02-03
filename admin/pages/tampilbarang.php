<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <center>
		
	<div class="w3-panel w3-round-xxlarge w3-aqua">
		<h4>DATA TABEL BARANG
	</div>
	
	<table class="w3-table-all">
	<thead>
	<thead>
      <tr class="w3-light-grey">
        <th>NO</th>
        <th>KODE BARANG</th>
        <th>NAMA BARANG</th>
		<th>HARGA</th>
		<th>STOCK</th>
		<th colspan="2" class="w3-center">ACTION</th>
      </tr>
    </thead>

	<?php
		require ("koneksi.php");
		$sql="select * from barang";
		$hasil=mysqli_query($conn,$sql);
		$row=mysqli_fetch_row($hasil);
		$n = 1;
		do
		{
		list($kodebrg,$namabarang,$harga,$stok) = $row;
		echo "<tr><td>$n
				<td>$kodebrg
				<td>$namabarang
				<td>$harga
				<td>$stok";
		echo "<td align=right><a href='index2.php?p=editbarang&kodebrg=$kodebrg'>Edit";
		echo "<td align=right><a href='index2.php?p=deletebarang&kodebrg=$kodebrg'>Delete";
		$n++;
		}
		while($row=mysqli_fetch_row($hasil));
	?>
</html>