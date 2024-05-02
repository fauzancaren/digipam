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

		$this->load->model('Chart_model');
		$this->load->model('Pengguna_model');
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
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else if($this->session->userdata('login_mode') == 'petugas'){
			$data['_content'] = $this->load->view('content/dashboard_admin', $data,true);
			$this->load->view('template/mainmenu3', $data);
		}else{
        	$data['usage_data'] = $this->Chart_model->getUsageData($this->session->userdata('PelangganIDMesin'));
			$data['_content'] = $this->load->view('content/dashboard_pelanggan', $data,true);
			$this->load->view('template/mainmenu4', $data);
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

	public function pengaduan ()
	{
		$data['_sessionuser'] = $this->session->userdata();
		$data['_agent'] = $this->agent; 
		$data['_menu'] = "Pengaduan";
		$data['_content'] = $this->load->view('content/pengaduan_pelanggan', $data,true);
		if ($this->session->userdata('login_auth') != TRUE){
			$this->load->view('template/auth', $data);
		}else{
			$this->load->view('template/mainmenu4', $data);
		}
	}

	public function getDataPengaduan()
	{
		$status = $this->input->post('status');
		$data['result'] = $this->Pengguna_model->getPengaduan($this->session->userdata('idUser'), $status);

		$html = '<ul class="list-group">';
    foreach ($data['result'] as $item) {
        $html .= '<li class="list-group-item">';
        $html .= '<div class="d-flex flex-column gap-3">';
        $html .= '<div class="d-flex flex-row justify-content-between align-items-baseline">';
        $html .= '<h5>' . $item['pengajuanType'] . '</h5>';
        $html .= '<span>' . $item['pengaduanTanggal'] . '</span>';
        $html .= '</div>';
        $html .= '<span>' . $item['pengaduanPesan'] . '</span>';
        $html .= '</div>';
        $html .= '<div class="d-flex flex-row justify-content-end align-items-center mt-4">';
        $html .= '<div class="d-flex flex-row gap-2">';
		if($item['pengaduanStatusNotice'] === "0"){
			$html .= '<button class="btn btn-sm btn-warning disabled">Menunggu Laporan Diterima</button>';
			$html .= '<button class="btn btn-sm btn-outline-danger canceladuan" onclick="delete_click(' . $item['pengaduanID'] . ')">Batalkan Aduan</button>';
		}else if($item['pengaduanStatusNotice'] === "1"){
			$html .= '<button class="btn btn-sm btn-primary disabled">Petugas Akan Segera Datang</button>';
			$html .= '<button class="btn btn-sm btn-outline-success">Selesaikan Pengaduan</button>';
		}else{
			$html .= '<button class="btn btn-sm btn-secondary">Beri Penilaian</button>';
		}
        // $html .= '<button class="btn btn-sm btn-primary">Edit</button>';
        // $html .= '<button class="btn btn-sm btn-danger">Batalkan Aduan</button>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</li>';
    }
    $html .= '</ul>';

    // Kirim HTML sebagai respons
    echo $html;
		
		
	}

	public function deletePengaduan($id) {
        // $id_pengaduan = $this->input->post('id_pengaduan');
        // $deleted = $this->Pengguna_model->deletePengaduan($id_pengaduan);

        // if ($deleted) {
        //     $response = array('status' => 'success', 'message' => 'Aduan berhasil dibatalkan');
        // } else {
        //     $response = array('status' => 'error', 'message' => 'Gagal membatalkan aduan');
        // }

        // header('Content-Type: application/json');
        // echo json_encode($response);
            $this->db->delete('pengaduan', array("pengaduanID" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
    }
	
 
}