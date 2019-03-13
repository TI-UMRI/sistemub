<?php
class mbarangout extends CI_Model{

function data_barangout(){
	$query = $this->db->query("select * from barang_out");
	return $query;
	}	
function simpan($data)
{
$this->db->set('id_out',$data['id_out']);
$this->db->set('kode_barang',$data['kode_barang']);
$this->db->set('nama_barang',$data['nama_barang']);
$this->db->set('jumlah_barang',$data['jumlah_stok']);
$this->db->set('satuan',$data['satuan']);
$this->db->set('nama_konsumen',$data['nama_konsumen']);
$this->db->set('tanggal',$data['tanggal']);
$hasil = $this->db->insert('barang_out');
if($hasil){
	return true;
	}
}

function hapus($id_out)
	{
	$this->db->where('id_out',$id_out);
	$hasil = $this->db->delete('barang_out');
	if($hasil){
		return true;
		}
	}

function ambil($id_out){
	$query = $this->db->query("select * from barang_out where id_out='".$id_out."'");
	return $query;	
	}	

function edit($data,$id_out){
		$this->db->where('id_out',$id_out);
		$hasil = $this->db->update('barang_out',$data);
		if($hasil){
		return true;
		}
	}
}
?>