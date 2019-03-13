<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang_out extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Barang Keluar";
		$data['main'] = "vdata_barangout";
		$this->load->model('mbarangout');
		$data['barang_out'] = $this->mbarangout->data_barangout();
		$this->load->view('dashboard',$data);
	}
    public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['id_out']=$_POST['id_out'];
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_stok']=$_POST['jumlah_stok'];
		$data['satuan']=$_POST['satuan'];
		$data['nama_konsumen']=$_POST['nama_konsumen'];
		$data['tanggal']=$_POST['tanggal'];		
		
		$this->load->model('mbarangout');
		$hasil = $this->mbarangout->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'barang_out";</script>';
			} 
		} else {
				$data['title'] = "Tambah Barang Keluar";
				$data['main'] = "vtambah_barangout";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($id_out)
	{
		$this->load->model('mbarangout');
		$hasil = $this->mbarangout->hapus($id_out);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'barang_out";</script>';
		}
		
	}

	public function edit($id_out){
	if(isset($_POST['submit'])){	
		$data['id_out']=$_POST['id_out'];
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_stok']=$_POST['jumlah_stok'];
		$data['satuan']=$_POST['satuan'];
		$data['nama_konsumen']=$_POST['nama_konsumen'];
		$data['tanggal']=$_POST['tanggal'];
			
	$this->load->model('mbarangout');
	$hasil = $this->mbarangout->edit($data,$id_out);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'barang_out";</script>';		
		} 
	} else {		
		$this->load->model('mbarangout');
		$data['barang_out'] = $this->mbarangout->ambil($id_out);
		$data['id_out'] = $id_out;
		$data['title'] = "Edit Barang";
		$data['main'] = "vedit_barangout";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
