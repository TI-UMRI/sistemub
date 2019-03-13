<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class supplier extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Supplier";
		$data['main'] = "vdata_supplier";
		$this->load->model('msupplier');
		$data['supplier'] = $this->msupplier->data_supplier();
		$this->load->view('dashboard',$data);
	}
	public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['kode_supplier']=$_POST['kode_supplier'];
		$data['nama_supplier']=$_POST['nama_supplier'];
		$data['alamat_supplier']=$_POST['alamat_supplier'];
		$data['telp']=$_POST['telp'];
		$data['merk_barang']=$_POST['merk_barang'];
		
		$this->load->model('msupplier');
		$hasil = $this->msupplier->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'supplier";</script>';
			} 
		} else {
				$data['title'] = "Tambah Supplier";
				$data['main'] = "vtambah_supplier";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($kode_supplier)
	{
		$this->load->model('msupplier');
		$hasil = $this->msupplier->hapus($kode_supplier);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'supplier";</script>';
		}
		
	}

	public function edit($kode_supplier){
	if(isset($_POST['submit'])){	
	$data['kode_supplier']=$_POST['kode_supplier'];
	$data['nama_supplier']=$_POST['nama_supplier'];
	$data['alamat_supplier']=$_POST['alamat_supplier'];
	$data['telp']=$_POST['telp'];
	$data['merk_barang']=$_POST['merk_barang'];
			
	$this->load->model('msupplier');
	$hasil = $this->msupplier->edit($data,$kode_supplier);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'supplier";</script>';		
		} 
	} else {		
		$this->load->model('msupplier');
		$data['supplier'] = $this->msupplier->ambil($kode_supplier);
		$data['kode_supplier'] = $kode_supplier;
		$data['title'] = "Edit Data Supplier";
		$data['main'] = "vedit_supplier";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
