`<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class utama extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		if(isset($_POST["submit"]))
		{
		$nama_pengguna 	= $_POST["username"];
		$kata_sandi 	= md5($_POST["password"]);    
    
		$this->load->model('admin');
    	$data_admin = $this->admin->cek_login($nama_pengguna,$kata_sandi);
    	if($data_admin->username !="")
    	{
      		$_SESSION["id_login"] = $data_admin->username;
      		$_SESSION["nama_login"] = $data_admin->nama_lengkap;
      		$_SESSION["level"] = "Admin";

      		echo '<script>window.location.href="'.base_url().'utama/beranda";</script>';
    	} else{
    	?>
      	<script language="javascript">
        alert("Maaf, Username atau Password Anda salah..");
        document.location="<?=base_url();?>";
      	</script>
    	<?php
    			}   
    
		}
	}
	public function beranda()
	{
		$data['title'] = "Dashboard Admin";
		$data['main'] = "vmain";
		$this->load->view('dashboard',$data);
	}
	public function logout()
	{
		session_destroy();
    	unset($_SESSION);
		redirect('utama');
	}
}
