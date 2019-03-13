<?php
class mkonsumen extends CI_Model{

function data_konsumen(){
	$query = $this->db->query("select * from konsumen");
	return $query;
	}	

function simpan($data)
{
$this->db->set('kode_konsumen',$data['kode_konsumen']);
$this->db->set('nama_konsumen',$data['nama_konsumen']);
$this->db->set('alamat_konsumen',$data['alamat_konsumen']);
$this->db->set('telepon',$data['telepon']);
$hasil = $this->db->insert('konsumen');
if($hasil){
	return true;
	}
}

function hapus($kode_konsumen)
	{
	$this->db->where('kode_konsumen',$kode_konsumen);
	$hasil = $this->db->delete('konsumen');
	if($hasil){
		return true;
		}
	}

function ambil($kode_konsumen){
	$query = $this->db->query("select * from konsumen where kode_konsumen='".$kode_konsumen."'");
	return $query;	
	}	

function edit($data,$kode_konsumen){
		$this->db->where('kode_konsumen',$kode_konsumen);
		$hasil = $this->db->update('konsumen',$data);
		if($hasil){
		return true;
		}
	}
}
?>