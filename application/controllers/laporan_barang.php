<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class laporan_barang extends CI_Controller {

	public function index()
	{
		$this->load->model('mlaporan_barang');
		$data['nama_barang'] = $this->mlaporan_barang->nama_barang();
		$data['title'] = "Laporan Data Barang";
		$data['main'] = "vlap_barang";
		$this->load->view('dashboard',$data);
	}

	public function cetak_barang()
	{
		$this->load->model('mlaporan_barang');
		$data['nama_barang'] = $this->mlaporan_barang->nama_barang();
		$data['title'] = "Cetak Laporan Barang";
		$data['main'] = "vcetak_barang";
		$this->load->view('dashboard', $data);
 
        
	}	
	
}
