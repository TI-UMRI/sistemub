<?php
class mlaporan_barangout extends CI_Model{

function id_out(){
	$query = $this->db->query("select distinct(id_out) from barang_out");
	return $query;
	}	

function data_barangout(){
	$query = $this->db->query("select * from barang_out");
	return $query;
	}	
	



}
?>