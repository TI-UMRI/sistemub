<?php
Class M_cari Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('barang',$keyword);
        $query  =   $this->db->get('kode_barang');
        return $query->result();
    }
}   
?>