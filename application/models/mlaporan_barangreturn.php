<?php
class mlaporan_barangreturn extends CI_Model{

function id_return(){
	$query = $this->db->query("select distinct(id_return) from barang_return");
	return $query;
	}	

function data_barang(){
	$query = $this->db->query("select * from barang_return");
	return $query;
	}	
}
?>