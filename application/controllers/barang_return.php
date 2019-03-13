<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class barang_return extends CI_Controller {

	public function index()
	{
		$data['title'] = "Data Barang Return";
		$data['main'] = "vdata_barangreturn";
		$this->load->model('mbarangreturn');
		$data['barang_return'] = $this->mbarangreturn->data_barangreturn();
		$this->load->view('dashboard',$data);
	}
	public function tambah() {
	if(isset($_POST['submit'])) { 
		$data['id_return']=$_POST['id_return'];
		$data['kode_barang']=$_POST['kode_barang'];
		$data['nama_barang']=$_POST['nama_barang'];
		$data['jumlah_barang']=$_POST['jumlah_barang'];
		$data['satuan']=$_POST['satuan'];
		$data['ket']=$_POST['ket'];
		
		
		$this->load->model('mbarangreturn');
		$hasil = $this->mbarangreturn->simpan($data);
		if($hasil){
			echo '<script>alert("Data berhasil ditambah!"); window.location.href="'.base_url().'barang_return";</script>';
			} 
		} else {
				$data['title'] = "Tambah Barang Return";
				$data['main'] = "vtambah_barangreturn";
				$this->load->view('dashboard',$data);
				}
	}	

	public function hapus($id_return)
	{
		$this->load->model('mbarangreturn');
		$hasil = $this->mbarangreturn->hapus($id_return);
		if($hasil){
			echo '<script>alert("Data berhasil dihapus!"); window.location.href="'.base_url().'barang_return";</script>';
		}
		
	}

	public function edit($id_return){
	if(isset($_POST['submit'])){	
	$data['id_return']=$_POST['id_return'];
	$data['kode_barang']=$_POST['kode_barang'];
	$data['nama_barang']=$_POST['nama_barang'];
	$data['jumlah_barang']=$_POST['jumlah_barang'];
	$data['satuan']=$_POST['satuan'];
	$data['ket']=$_POST['ket'];
			
	$this->load->model('mbarangreturn');
	$hasil = $this->mbarangreturn->edit($data,$id_return);
	if($hasil){
		echo '<script>alert("Data berhasil diubah!"); window.location.href="'.base_url().'barang_return";</script>';		
		} 
	} else {		
		$this->load->model('mbarangreturn');
		$data['barang_return'] = $this->mbarangreturn->ambil($id_return);
		$data['id_return'] = $id_rusak;
		$data['title'] = "Edit Data Barang Return";
		$data['main'] = "vedit_barangreturn";
		$this->load->view('dashboard',$data);
			}	
	}
	
}
