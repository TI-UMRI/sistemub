<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
 
    if($this->session->data_admin('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  function index(){
    $this->load->view('v_dashboard');
  }

  function data_barang(){
        if($this->session->data_admin('akses')=='1' || $this->sdata_admin('akses')=='2'){
      $this->load->view('vdata_barang');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function data_supplier(){
        if($this->session->data_admin('akses')=='1' || $this->session->data_admin('akses')=='2'){
      $this->load->view('vdata_supplier');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function data_konsumen(){
        if($this->session->data_admin('akses')=='1' || $this->session->data_admin('akses')=='2'){
      $this->load->view('vdata_konsumen');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function data_penjualan(){
        if($this->session->data_admin('akses')=='1'){
      $this->load->view('vdata_penjualan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function data_pembelian(){
        if($this->session->data_admin('akses')=='1'){
      $this->load->view('vdata_pembelian');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
  
}
