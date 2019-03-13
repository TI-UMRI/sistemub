<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang_masuk extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Barang Masuk";
		$data['main'] = "vdata_barangmasuk";
		$this->load->model('mbarangmasuk');
		$data['barang_masuk'] = $this->mbarangmasuk->data_barangmasuk();
		$this->load->view('dashboard',$data);
	}
	public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['id_masuk']=$_POST['id_masuk'];
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_barang']=$_POST['jumlah_barang'];
		$data['satuan']=$_POST['satuan'];
		$data['nama_supplier']=$_POST['nama_supplier'];
		$data['tanggal']=$_POST['tanggal'];
		
		$this->load->model('mbarangmasuk');
		$hasil = $this->mbarangmasuk->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'barang_masuk";</script>';
			} 
		} else {
				$data['title'] = "Tambah Barang Masuk";
				$data['main'] = "vtambah_barangmasuk";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($id_masuk)
	{
		$this->load->model('mbarangmasuk');
		$hasil = $this->mbarangmasuk->hapus($id_masuk);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'barang_masuk";</script>';
		}
		
	}

	public function edit($id_masuk){
	if(isset($_POST['submit'])){	
	$data['id_masuk']=$_POST['id_masuk'];
	$data['kode_barang']=$_POST['kode_barang'];
	$data['nama_barang']=$_POST['nama_barang'];
	$data['jumlah_barang']=$_POST['jumlah_barang'];
	$data['satuan']=$_POST['satuan'];
	$data['nama_supplier']=$_POST['nama_supplier'];
	$data['tanggal']=$_POST['tanggal'];
			
	$this->load->model('mbarangmasuk');
	$hasil = $this->mbarangmasuk->edit($data,$id_masuk);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'barang_masuk";</script>';		
		} 
	} else {		
		$this->load->model('mbarangmasuk');
		$data['barang_masuk'] = $this->mbarangmasuk->ambil($id_masuk);
		$data['id_masuk'] = $id_masuk;
		$data['title'] = "Edit Data Barang Masuk";
		$data['main'] = "vedit_barangmasuk";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
