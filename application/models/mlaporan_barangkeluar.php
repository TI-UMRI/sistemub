<?php
class mlaporan_barangkeluar extends CI_Model{

function id_keluar(){
	$query = $this->db->query("select distinct(id_keluar) from barang_keluar");
	return $query;
	}	

function data_barang(){
	$query = $this->db->query("select * from barang_keluar");
	return $query;
	}	
}
?>