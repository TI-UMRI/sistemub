<?php
class mlaporan_barang extends CI_Model{

function kode_barang(){
	$query = $this->db->query("select distinct(kode_barang) from barang");
	return $query;
	}	

function data_barang(){
	$query = $this->db->query("select * from barang");
	return $query;
	}	
	



}
?>