<?php
class mbarangreturn extends CI_Model{

function data_barangreturn(){
	$query = $this->db->query("select * from barang_return");
	return $query;
	}	

function simpan($data)
{
$this->db->set('id_return',$data['id_return']);
$this->db->set('kode_barang',$data['kode_barang']);
$this->db->set('nama_barang',$data['nama_barang']);
$this->db->set('jumlah_barang',$data['jumlah_barang']);
$this->db->set('satuan',$data['satuan']);
$this->db->set('ket',$data['ket']);
$hasil = $this->db->insert('barang_return');
if($hasil){
	return true;
	}
}

function hapus($id_return)
	{
	$this->db->where('id_return',$id_return);
	$hasil = $this->db->delete('barang_return');
	if($hasil){
		return true;
		}
	}

function ambil($id_return){
	$query = $this->db->query("select * from barang_return where id_return='".$id_return."'");
	return $query;	
	}	

function edit($data,$id_return){
		$this->db->where('id_return',$id_return);
		$hasil = $this->db->update('barang_return',$data);
		if($hasil){
		return true;
		}
	}
}
?>