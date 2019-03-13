<?php
class mbarang extends CI_Model{

function data_barang(){
	$query = $this->db->query("select * from barang");
	return $query;
	}	
function simpan($data)
{
$this->db->set('kode_barang',$data['kode_barang']);
$this->db->set('nama_barang',$data['nama_barang']);
$this->db->set('jumlah_stok',$data['jumlah_stok']);
$this->db->set('satuan',$data['satuan']);
$this->db->set('merk_barang',$data['merk_barang']);
$hasil = $this->db->insert('barang');
if($hasil){
	return true;
	}
}

function hapus($kode_barang)
	{
	$this->db->where('kode_barang',$kode_barang);
	$hasil = $this->db->delete('barang');
	if($hasil){
		return true;
		}
	}

function ambil($kode_barang){
	$query = $this->db->query("select * from barang where kode_barang='".$kode_barang."'");
	return $query;	
	}	

function edit($data,$kode_barang){
		$this->db->where('kode_barang',$kode_barang);
		$hasil = $this->db->update('barang',$data);
		if($hasil){
		return true;
		}
	}
}
?>