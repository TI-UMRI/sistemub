<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftarlist_barangkeluar extends CI_Controller {

	public function index()
	{
		$this->load->model('mlaporan_barangkeluar');
		$data['barang_keluar'] = $this->mlaporan_barangkeluar->data_barang();
		$data['title'] = "Laporan Data Barang Keluar";
		$data['main'] = "vdaftarlist_barangkeluar";
		$this->load->view('dashboard',$data);
	}

	public function ekspor()
	{
		ob_start();
		$this->load->model('mlaporan_barangkeluar');
		$data['barang_keluar'] = $this->mlaporan_barangkeluar->data_barang();	
		$this->load->view('vpdf_barangkeluar', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data_Barang_Keluar.pdf', 'D');
		}	
	
}
