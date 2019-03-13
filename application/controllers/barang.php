<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Barang";
		$data['main'] = "vdata_barang";
		$this->load->model('mbarang');
		$data['barang'] = $this->mbarang->data_barang();
		$this->load->view('dashboard',$data);
	}
    public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_stok']=$_POST['jumlah_stok'];
		$data['satuan']=$_POST['satuan'];
		$data['merk_barang']=$_POST['merk_barang'];		
		
		$this->load->model('mbarang');
		$hasil = $this->mbarang->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'barang";</script>';
			} 
		} else {
				$data['title'] = "Tambah Barang";
				$data['main'] = "vtambah_barang";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($kode_barang)
	{
		$this->load->model('mbarang');
		$hasil = $this->mbarang->hapus($kode_barang);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'barang";</script>';
		}
		
	}

	public function edit($kode_barang){
	if(isset($_POST['submit'])){	
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_stok']=$_POST['jumlah_stok'];
		$data['satuan']=$_POST['satuan'];
		$data['merk_barang']=$_POST['merk_barang'];
			
	$this->load->model('mbarang');
	$hasil = $this->mbarang->edit($data,$kode_barang);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'barang";</script>';		
		} 
	} else {		
		$this->load->model('mbarang');
		$data['barang'] = $this->mbarang->ambil($kode_barang);
		$data['kode_barang'] = $kode_barang;
		$data['title'] = "Edit Barang";
		$data['main'] = "vedit_barang";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
