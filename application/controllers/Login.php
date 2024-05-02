<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->helper('cookie');
    }
    public function test(){
       if (!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
        }elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))  {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else{
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        echo "<center>
                <h2>YOUR IP ADDRESS is ".$ip." </h2>
            </center>";
        $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
        echo "<center>
                <p>YOUR HostName is ".$host." </p>
            </center>";  
    }
    public function index()
    {
        $row = $this->m_login->login(get_cookie('username'), $this->m_login->DecryptedPassword(get_cookie('password')));
        if ($row) { 
            $sess_array = array(
                'idUser' => $row->idUser,
                'username' =>$row->username,
                'useremail' =>$row->useremail,
                'dark_mode' => true,
                'login_status' => true,
                'login_mode' => $row->role, 
                'login_auth' => true,
                'login_uuid' => (empty(get_cookie('uuid')) ? $this->m_login->guidv4() : get_cookie('uuid')),
                'PelangganIDMesin' => $row->PelangganIDMesin,

            );
            $this->session->set_userdata($sess_array);
            redirect('client', 'refresh'); 
        } else { 
            $this->load->view('template/login2'); 
        }
    }

    public function check()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $uuid = $this->m_login->guidv4();
        $check_user = $this->m_login->check_user($username);
        if ($check_user) {
            $row = $this->m_login->login($username, $pass);
            if ($row) { 
                $sess_array = array(
                    'idUser' => $row->idUser, 
                    'username' =>$row->username,
                    'useremail' =>$row->useremail,
                    'dark_mode' => false,
                    'login_status' => true,
                    'login_mode' => $row->role,
                    'login_uuid' => $uuid,
                    'login_auth' => true,
                    'PelangganIDMesin' => $row->PelangganIDMesin,
                );
                $this->session->set_userdata($sess_array);

                $json = array(
                    "status" => "Success",
                    "username" => "",
                    "password" => ""
                );
                
                set_cookie('username', $row->username, '3600');
                set_cookie('password', $this->m_login->EncryptedPassword(str_replace("'", "''", $pass)), '3600');
                set_cookie('uuid', $uuid, '3600'); 
                set_cookie('auth', true, '3600'); 
            } else {
                $json = array(
                    "status" => "failed",
                    "username" => "",
                    "password" => "Password yang anda masukan salah !!!",
                    "encript" =>  $this->m_login->EncryptedPassword($pass)
                );
            }
        } else {
            $json = array(
                "status" => "failed",
                "username" => "User belum terdaftar atau tidak aktif",
                "password" => ""
            );
        }

        header('Content-type: application/json');
        echo json_encode($json);
    }

    function logout()
    {

        delete_cookie('username');
        delete_cookie('password');
        delete_cookie('uuid');
        delete_cookie('auth');
 
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('useremail');
        $this->session->unset_userdata('PelangganIDMesin');
        $this->session->unset_userdata('idUser');
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('login_mode');
        $this->session->unset_userdata('login_uuid');
        $this->session->unset_userdata('login_auth');
        $this->session->set_flashdata('notif', '<p class="alert alert-success"><font FACE="calibri" Size="3px" color="RED"> Logout berhasil, Terima kasih telah menggunakan aplikasi ini...!!!</font></p>');
        redirect('login', 'refresh');
    }

    function base(){
        echo base_url();
    }
}
