<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class konsumen extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Konsumen";
		$data['main'] = "vdata_konsumen";
		$this->load->model('mkonsumen');
		$data['konsumen'] = $this->mkonsumen->data_konsumen();
		$this->load->view('dashboard',$data);
	}
	public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['kode_konsumen']=$_POST['kode_konsumen'];
		$data['nama_konsumen']=$_POST['nama_konsumen'];
		$data['alamat_konsumen']=$_POST['alamat_konsumen'];
		$data['telepon']=$_POST['telepon'];
		
		$this->load->model('mkonsumen');
		$hasil = $this->mkonsumen->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'konsumen";</script>';
			} 
		} else {
				$data['title'] = "Tambah Konsumen";
				$data['main'] = "vtambah_konsumen";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($kode_konsumen)
	{
		$this->load->model('mkonsumen');
		$hasil = $this->mkonsumen->hapus($kode_konsumen);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'konsumen";</script>';
		}
		
	}

	public function edit($kode_konsumen){
	if(isset($_POST['submit'])){	
	$data['kode_konsumen']=$_POST['kode_konsumen'];
	$data['nama_konsumen']=$_POST['nama_konsumen'];
	$data['alamat_konsumen']=$_POST['alamat_konsumen'];
	$data['telepon']=$_POST['telepon'];
			
	$this->load->model('mkonsumen');
	$hasil = $this->mkonsumen->edit($data,$kode_konsumen);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'konsumen";</script>';		
		} 
	} else {		
		$this->load->model('mkonsumen');
		$data['konsumen'] = $this->mkonsumen->ambil($kode_konsumen);
		$data['kode_konsumen'] = $kode_konsumen;
		$data['title'] = "Edit Data Konsumen";
		$data['main'] = "vedit_konsumen";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
