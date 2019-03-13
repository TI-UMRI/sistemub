<html>
<head>
<title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Barang</h1>
<table border="1" width="100%" align="center">
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Alamat</th>
<th>Prodi</th>

</tr>
<?php
if(!empty($barang->result())){
$no = 1;
foreach($barang->result() as $data){
echo "<tr>";
echo "<td>".$no."</td>";
echo "<td>".$data->nim."</td>";
echo "<td>".$data->nama_mhs."</td>";
echo "<td>".$data->alamat."</td>";
echo "<td>".$data->prodi."</td>";
echo "</tr>";
$no++;
}
}
?>
</table>
</body>
</html>

             