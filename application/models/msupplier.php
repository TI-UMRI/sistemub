<?php
class msupplier extends CI_Model{

function data_supplier(){
	$query = $this->db->query("select * from supplier");
	return $query;
	}	

function simpan($data)
{
$this->db->set('kode_supplier',$data['kode_supplier']);
$this->db->set('nama_supplier',$data['nama_supplier']);
$this->db->set('alamat_supplier',$data['alamat_supplier']);
$this->db->set('telp',$data['telp']);
$this->db->set('merk_barang',$data['merk_barang']);
$hasil = $this->db->insert('supplier');
if($hasil){
	return true;
	}
}

function hapus($kode_supplier)
	{
	$this->db->where('kode_supplier',$kode_supplier);
	$hasil = $this->db->delete('supplier');
	if($hasil){
		return true;
		}
	}

function ambil($kode_supplier){
	$query = $this->db->query("select * from supplier where kode_supplier='".$kode_supplier."'");
	return $query;	
	}	

function edit($data,$kode_supplier){
		$this->db->where('kode_supplier',$kode_supplier);
		$hasil = $this->db->update('supplier',$data);
		if($hasil){
		return true;
		}
	}
}
?>