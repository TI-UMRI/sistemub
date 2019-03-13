<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftarlist_barang extends CI_Controller {

	public function index()
	{
		$this->load->model('mlaporan_barang');
		$data['barang'] = $this->mlaporan_barang->data_barang();
		$data['title'] = "Laporan Data Stock Barang";
		$data['main'] = "vdaftarlist_barang";
		$this->load->view('dashboard',$data);
	}

	public function ekspor()
	{
		ob_start();
		$this->load->model('mlaporan_barang');
		$data['barang'] = $this->mlaporan_barang->data_barang();	
		$this->load->view('vpdf_barang', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		ob_start();
		$pdf->Output('Data_Stok_Barang.pdf', 'D');
		}	
	
}
