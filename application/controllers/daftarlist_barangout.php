<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftarlist_barangout extends CI_Controller {

	public function index()
	{
		$this->load->model('mlaporan_barangout');
		$data['barang_out'] = $this->mlaporan_barangout->data_barangout();
		$data['title'] = "Laporan Data Stock Barang Keluar";
		$data['main'] = "vdaftarlist_barangout";
		$this->load->view('dashboard',$data);
	}

	public function ekspor()
	{
		ob_start();
		$this->load->model('mlaporan_barangout');
		$data['barang_out'] = $this->mlaporan_barangout->data_barangout();	
		$this->load->view('vpdf_barangout', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data_Stok_Barang_Keluar.pdf', 'D');
		}	
	
}
