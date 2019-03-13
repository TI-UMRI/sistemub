<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang_keluar extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Barang Keluar";
		$data['main'] = "vdata_barangkeluar";
		$this->load->model('mbarangkeluar');
		$data['barang_keluar'] = $this->mbarangkeluar->data_barangkeluar();
		$this->load->view('dashboard',$data);
	}
	public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['id_keluar']=$_POST['id_keluar'];
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_barang']=$_POST['jumlah_barang'];
		$data['satuan']=$_POST['satuan'];
		$data['nama_konsumen']=$_POST['nama_konsumen'];
		$data['tanggal']=$_POST['tanggal'];
		
		$this->load->model('mbarangkeluar');
		$hasil = $this->mbarangkeluar->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'barang_keluar";</script>';
			} 
		} else {
				$data['title'] = "Tambah Barang Keluar";
				$data['main'] = "vtambah_barangkeluar";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($id_keluar)
	{
		$this->load->model('mbarangkeluar');
		$hasil = $this->mbarangkeluar->hapus($id_keluar);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'barang_keluar";</script>';
		}
		
	}

	public function edit($id_keluar){
	if(isset($_POST['submit'])){	
	$data['id_keluar']=$_POST['id_keluar'];
	$data['kode_barang']=$_POST['kode_barang'];
	$data['nama_barang']=$_POST['nama_barang'];
	$data['jumlah_barang']=$_POST['jumlah_barang'];
	$data['satuan']=$_POST['satuan'];
	$data['nama_supplier']=$_POST['nama_supplier'];
	$data['tanggal']=$_POST['tanggal'];
			
	$this->load->model('mbarangkeluar');
	$hasil = $this->mbarangkeluar->edit($data,$id_keluar);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'barang_keluar";</script>';		
		} 
	} else {		
		$this->load->model('mbarangkeluar');
		$data['barang_keluar'] = $this->mbarangkeluar->ambil($id_keluar);
		$data['id_keluar'] = $id_keluar;
		$data['title'] = "Edit Data Barang Keluar";
		$data['main'] = "vedit_barangkeluar";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
