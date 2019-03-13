<html>
<head>
<title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Barang Masuk</h1>
<table border="1" width="100%" align="center">
<tr>
<th>No</th>
<th>Kode Masuk</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Jumlah Stok</th>
<th>Satuan</th>
<th>Nama Supplier</th>
<th>Tanggal</th>

</tr>
<?php
if(!empty($barang_masuk->result())){
$no = 1;
foreach($barang_masuk->result() as $data){
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$data->id_masuk."</td>";
echo "<td>".$data->kode_barang."</td>";
echo "<td>".$data->nama_barang."</td>";
echo "<td>".$data->jumlah_barang."</td>";
echo "<td>".$data->satuan."</td>";
echo "<td>".$data->nama_supplier."</td>";
echo "<td>".$data->tanggal."</td>";
echo "</tr>";
$no++;
}
}
?>
</table>
</body>
</html>

             