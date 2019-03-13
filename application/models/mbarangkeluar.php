<?php
class mbarangkeluar extends CI_Model{

function data_barangkeluar(){
	$query = $this->db->query("select * from barang_keluar");
	return $query;
	}	

function simpan($data)
{
$this->db->set('id_keluar',$data['id_keluar']);
$this->db->set('kode_barang',$data['kode_barang']);
$this->db->set('nama_barang',$data['nama_barang']);
$this->db->set('jumlah_barang',$data['jumlah_barang']);
$this->db->set('satuan',$data['satuan']);
$this->db->set('nama_konsumen',$data['nama_konsumen']);
$this->db->set('tanggal',$data['tanggal']);
$hasil = $this->db->insert('barang_keluar');
if($hasil){
	return true;
	}
}

function hapus($id_keluar)
	{
	$this->db->where('id_keluar',$id_keluar);
	$hasil = $this->db->delete('barang_keluar');
	if($hasil){
		return true;
		}
	}

function ambil($id_keluar){
	$query = $this->db->query("select * from barang_keluar where id_keluar='".$id_keluar."'");
	return $query;	
	}	

function edit($data,$id_keluar){
		$this->db->where('id_keluar',$id_keluar);
		$hasil = $this->db->update('barang_keluar',$data);
		if($hasil){
		return true;
		}
	}
}
?>