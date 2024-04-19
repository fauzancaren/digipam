<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{
	function __construct()
	{
		parent::__construct(); 
		if ($this->session->userdata('login_status') != TRUE) {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger" role="alert">anda belum login, silahkan login terlebih dahulu!!!</div>');
			redirect('login', 'refresh');
		};
		if( empty($this->session->userdata('login_uuid'))){
			$this->session->set_flashdata('notif', '<div class="alert alert-danger" role="alert">anda belum login, silahkan login terlebih dahulu!!!</div>');
			redirect('login', 'refresh');
		}
		 
		date_default_timezone_set('Asia/Jakarta');
	}

	public function set_darkmode($export_type)
    {
        $this->session->set_userdata('dark_mode', $export_type);
        echo 'Session set!';
        return;
    }
	private function agent(){
		$this->load->library('user_agent');
		if ($this->agent->is_browser())
		{
			// $agent = $this->agent->browser().' '.$this->agent->version();
			$agent = false;
		}
		elseif ($this->agent->is_robot())
		{
			// $agent = $this->agent->robot();
			$agent = false;
		}
		elseif ($this->agent->is_mobile())
		{
			//$agent = $this->agent->mobile();
			$agent = true;
		}
		else
		{
			//$agent = 'Unidentified User Agent';
			$agent = false;
		}
		return $agent;
	}
	public function index()
	{
		
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Dashboard"; 
		$data['_content'] = $this->load->view('content/dashboard_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	} 
	public function tarif()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Tarif"; 
		$data['_content'] = $this->load->view('content/tarif_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
	public function petugas()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Petugas"; 
		$data['_content'] = $this->load->view('content/petugas_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
	public function pelanggan()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Pelanggan"; 
		$data['_petugas'] = $this->db->get("petugas")->result(); 
		$data['_tarif'] = $this->db->get("harga")->result(); 
		$data['_content'] = $this->load->view('content/pelanggan_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
	public function info()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Info"; 
		$data['_content'] = $this->load->view('content/info_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
	public function pemakaian()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Pemakaian"; 
		$data['_content'] = $this->load->view('content/pemakaian_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
	public function tagihan()
	{ 
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Tagihan"; 
		$data['_content'] = $this->load->view('content/tagihan_admin', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu3', $data);
		}
	}
 
}
