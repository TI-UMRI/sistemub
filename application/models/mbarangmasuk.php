<?php
class mbarangmasuk extends CI_Model{

function data_barangmasuk(){
	$query = $this->db->query("select * from barang_masuk");
	return $query;
	}	

function simpan($data)
{
$this->db->set('id_masuk',$data['id_masuk']);
$this->db->set('kode_barang',$data['kode_barang']);
$this->db->set('nama_barang',$data['nama_barang']);
$this->db->set('jumlah_barang',$data['jumlah_barang']);
$this->db->set('satuan',$data['satuan']);
$this->db->set('nama_supplier',$data['nama_supplier']);
$this->db->set('tanggal',$data['tanggal']);
$hasil = $this->db->insert('barang_masuk');
if($hasil){
	return true;
	}
}

function hapus($id_masuk)
	{
	$this->db->where('id_masuk',$id_masuk);
	$hasil = $this->db->delete('barang_masuk');
	if($hasil){
		return true;
		}
	}

function ambil($id_masuk){
	$query = $this->db->query("select * from barang_masuk where id_masuk='".$id_masuk."'");
	return $query;	
	}	

function edit($data,$id_masuk){
		$this->db->where('id_masuk',$id_masuk);
		$hasil = $this->db->update('barang_masuk',$data);
		if($hasil){
		return true;
		}
	}
}
?>