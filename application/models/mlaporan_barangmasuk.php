<?php
class mlaporan_barangmasuk extends CI_Model{

function id_masuk(){
	$query = $this->db->query("select distinct(id_masuk) from barang_masuk");
	return $query;
	}	

function data_barang(){
	$query = $this->db->query("select * from barang_masuk");
	return $query;
	}	
}
?>