<?php
class admin extends CI_Model{

function cek_login($username,$password){
	$query = $this->db->query("select * from admin where username='".$username."' and password = '".$password."'");	

	return $query->row();
	}	

}
?>