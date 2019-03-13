<html>
<head>
<title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Barang</h1>
<table border="1" width="100%" align="center">
<tr>
<th>No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Jumlah Stok</th>
<th>Satuan</th>
<th>Merek Barang</th>

</tr>
<?php
if(!empty($barang->result())){
$no = 1;
foreach($barang->result() as $data){
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$data->kode_barang."</td>";
echo "<td>".$data->nama_barang."</td>";
echo "<td>".$data->jumlah_stok."</td>";
echo "<td>".$data->satuan."</td>";
echo "<td>".$data->merk_barang."</td>";
echo "</tr>";
$no++;
}
}
?>
</table>
</body>
</html>

             