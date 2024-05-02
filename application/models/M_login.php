<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Fauzan Caren.
 * User: OBI-WEB
 * Ver: v5.0.0
 * Date: 05/19/2021
 * To change this template use File | Settings | File Templates.
 */
 
class M_login extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function createDataClass($idUSer, $username, $useremail, $PelangganIDMesin, $role) {
		return new class($idUSer, $username, $useremail, $PelangganIDMesin, $role) {
			public $idUser;
			public $username;
			public $useremail;
			public $PelangganIDMesin;
			public $role;
	
			public function __construct($idUser, $username, $useremail, $PelangganIDMesin, $role) {
				$this->idUser = $idUser;
				$this->username = $username;
				$this->useremail = $useremail;
				$this->PelangganIDMesin = $PelangganIDMesin;
				$this->role = $role;
			}

			public function idUser() {
				return $this->$idUser;
			}

			public function setIdUser($idUser) {
				$this->idUser = $$idUser;
			}
	
			public function username() {
				return $this->username;
			}
	
			public function setUsername($username) {
				$this->username = $username;
			}
	
			public function useremail() {
				return $this->useremail;
			}
	
			public function setUseremail($useremail) {
				$this->useremail = $useremail;
			}

			public function idMesin() {
				return $this->useremail;
			}
	
			public function setIdMesin($PelangganIDMesin) {
				$this->PelangganIDMesin = $PelangganIDMesin;
			}
	
			public function role() {
				return $this->role;
			}
	
			public function setRole($role) {
				$this->role = $role;
			}
		};
	}
    function login($username, $password)
	{
		$user = str_replace("'", "''", $username);
		$pass = $this->EncryptedPassword(str_replace("'", "''", $password));
        $query = $this->db->where("PetugasEmail",$username)->where("PetugasPassword",$pass)->get("petugas");
		if ($query->num_rows() == 1) {
			$data = $query->row(); 
			return $this->createDataClass($data->PetugasName,$data->PetugasEmail,'petugas');
		} else {
			$query1 = $this->db->where("PelangganEmail",$username)->where("PelangganPassword",$pass)->get("pelanggan");
			if ($query1->num_rows() == 1) {
				$data = $query1->row(); 
				return $this->createDataClass($data->PelangganId, $data->PelangganName,$data->PelangganEmail, $data->PelangganIDMesin, 'pelanggan');
			} else {
				return false;
			}
		}
	}
	function check_user($username)
	{
		$user = str_replace("'", "''", $username);
        $query = $this->db->where("PetugasEmail",$username)->get("petugas"); 
		if ($query->num_rows() == 1) {
			return true;
		} else {
			$query1 = $this->db->where("PelangganEmail",$username)->get("pelanggan"); 
			if ($query1->num_rows() == 1) {
				return true;
			} else {
				return false;
			}
		}
	}
 

	/*
	|
	|	FUNCTION UNTUK ENCRIPT DAN DESCRIPT
	|
	*/
	function EncryptedPassword($pass)
	{
		$str1 = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890?!@#$%^&*()_+|;:,'.-`~";
		$str2 = "?!@#$%^&*()_+|;:,'.-`~1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
		$DecryptedText = "";
		for ($x = 1; $x <= strlen($pass); $x++) {

			$ori = substr($pass, $x - 1, 1);
			$lngPos  = strpos($str1, $ori);
			$DecryptedChr = substr($str2, $lngPos, 1);

			//echo substr($pass, $x, 1)."<br>";
			if ($lngPos > 0) {
				$DecryptedText = $DecryptedText . $DecryptedChr;
			} else {
				$DecryptedText = substr($pass, $x, 1);
			}
		}
		return $DecryptedText;
	}
	function DecryptedPassword($pass)
	{
		$str2 = " ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890?!@#$%^&*()_+|;:,'.-`~";
		$str1 = "?!@#$%^&*()_+|;:,'.-`~1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
		$DecryptedText = "";
		for ($x = 1; $x <= strlen($pass); $x++) {

			$ori = substr($pass, $x - 1, 1);
			$lngPos  = strpos($str1, $ori);
			$DecryptedChr = substr($str2, $lngPos, 1);

			//echo substr($pass, $x, 1)."<br>";
			if ($lngPos > 0) {
				$DecryptedText = $DecryptedText . $DecryptedChr;
			} else {
				$DecryptedText = substr($pass, $x, 1);
			}
		}
		return $DecryptedText;
	}

    function guidv4($data = null) {
		// Generate 16 bytes (128 bits) of random data or use the data passed into the function.
		$data = $data ?? random_bytes(16);
		assert(strlen($data) == 16);
	
		// Set version to 0100
		$data[6] = chr(ord($data[6]) & 0x0f | 0x40);
		// Set bits 6-7 to 10
		$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
	
		// Output the 36 character UUID.
		return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
	} 
}