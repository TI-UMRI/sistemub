<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftarlist_barangmasuk extends CI_Controller {

	public function index()
	{
		$this->load->model('mlaporan_barangmasuk');
		$data['barang_masuk'] = $this->mlaporan_barangmasuk->data_barang();
		$data['title'] = "Laporan Data Barang Masuk";
		$data['main'] = "vdaftarlist_barangmasuk";
		$this->load->view('dashboard',$data);
	}

	public function ekspor()
	{
		ob_start();
		$this->load->model('mlaporan_barangmasuk');
		$data['barang_masuk'] = $this->mlaporan_barangmasuk->data_barang();	
		$this->load->view('vpdf_barangmasuk', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data_Barang_Masuk.pdf', 'D');
		}	
	
}
