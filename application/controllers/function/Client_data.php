<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client_data extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->model('datatable/M_table', 'dt_table');
            $this->load->model('M_login'); 
            date_default_timezone_set('Asia/Jakarta');
      }

      function get_price_category(){  
            // SETUP DATATABLE
            $this->dt_table->table = 'harga';
            $this->dt_table->select = array("HargaId", "HargaKategori", "HargaDeskripsi","HargaMinKubik","HargaMinPrice","HargaPerKubik"); 
            $this->dt_table->column_order = array(null, 'HargaKategori', 'HargaDeskripsi',"HargaMinKubik","HargaMinPrice","HargaPerKubik"); //set column field database for datatable orderable
            $this->dt_table->column_search = array('HargaKategori', 'HargaDeskripsi',"HargaMinKubik","HargaMinPrice","HargaPerKubik"); //set column field database for datatable searchable 
            $this->dt_table->order = array('HargaKategori' => 'asc'); // default order 

            // PROSES DATA
            $list = $this->dt_table->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $master) {
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $master->HargaKategori;
                  $row[] = $master->HargaDeskripsi;
                  $row[] = $master->HargaMinKubik. " M<sup>3</sup>"; 
                  $row[] = "Rp. ".number_format($master->HargaMinPrice); 
                  $row[] = "Rp. ".number_format($master->HargaPerKubik) . "/M<sup>3</sup>";
                  $row[] = '  
                  <div class="d-flex flex-row">
                        <a onclick="edit_click(' . $master->HargaId . ')" class="me-2 text-warning pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                        <a onclick="delete_click(' . $master->HargaId . ')" class="me-2 text-danger pointer" title="Edit Data"><i class="fas fa-times"></i></a>
                  </div>';
                  $data[] = $row;
            }
            $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->dt_table->count_all(),
                  "recordsFiltered" => $this->dt_table->count_filtered(),
                  "data" => $data,
            );
            //output to json format
            echo json_encode($output); 
      }
      function get_petugas(){ 

            // SETUP DATATABLE
            $this->dt_table->table = 'petugas';
            $this->dt_table->select = array("PetugasId", "PetugasCode", "PetugasName", "PetugasNoHp","PetugasEmail"); 
            $this->dt_table->column_order = array(null, 'PetugasCode', 'PetugasName', "PetugasNoHp", 'PetugasEmail'); //set column field database for datatable orderable
            $this->dt_table->column_search = array('PetugasCode', 'PetugasName', "PetugasNoHp",'PetugasEmail'); //set column field database for datatable searchable 
            $this->dt_table->order = array('PetugasCode' => 'asc'); // default order 

            // PROSES DATA
            $list = $this->dt_table->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $master) {
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $master->PetugasCode;
                  $row[] = $master->PetugasName;
                  $row[] = $master->PetugasNoHp; 
                  $row[] = $master->PetugasEmail; 
                  $row[] = '  
                  <div class="d-flex flex-row">
                        <a onclick="edit_click(' . $master->PetugasId . ')" class="me-2 text-warning pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i></a> 
                        <a onclick="delete_click(' . $master->PetugasId . ')" class="me-2 text-danger pointer" title="Edit Data"><i class="fas fa-times"></i></a>
                  </div>';
                  $data[] = $row;
            }
            $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->dt_table->count_all(),
                  "recordsFiltered" => $this->dt_table->count_filtered(),
                  "data" => $data,
            );
            //output to json format
            echo json_encode($output); 
      }
      function get_pelanggan(){ 

            // SETUP DATATABLE
            $this->dt_table->table = 'pelanggan';
            $this->dt_table->select = array("PelangganId", "PelangganCode", "PelangganName", "PelangganAddress"); 
            $this->dt_table->column_order = array(null, 'PelangganCode', 'PelangganName',  'PelangganAddress'); //set column field database for datatable orderable
            $this->dt_table->column_search = array('PelangganCode', 'PelangganName', 'PelangganAddress'); //set column field database for datatable searchable 
            $this->dt_table->order = array('PelangganCode' => 'asc'); // default order 

            // PROSES DATA
            $list = $this->dt_table->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $master) {
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $master->PelangganCode;
                  $row[] = $master->PelangganName;
                  $row[] = $master->PelangganAddress; 
                  $row[] = '  
                  <div class="d-flex flex-row">
                        <a onclick="edit_click(' . $master->PelangganId . ')" class="me-2 text-warning pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i></a>
                        <a onclick="print_click(' . $master->PelangganId . ')" class="me-2 text-primary pointer" title="Edit Data"><i class="fas fa-print"></i></a> 
                        <a onclick="delete_click(' . $master->PelangganId . ')" class="me-2 text-danger pointer" title="Edit Data"><i class="fas fa-times"></i></a>
                  </div>';
                  $data[] = $row;
            }
            $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->dt_table->count_all(),
                  "recordsFiltered" => $this->dt_table->count_filtered(),
                  "data" => $data,
            );
            //output to json format
            echo json_encode($output); 
      }
      function get_info(){ 

            // SETUP DATATABLE
            $this->dt_table->table = 'info';
            $this->dt_table->select = array("InfoId", "InfoHeader", "InfoDeskripsi", "InfoUsersDetail"); 
            $this->dt_table->column_order = array(null, 'InfoHeader', 'InfoDeskripsi',  'InfoUsersDetail'); //set column field database for datatable orderable
            $this->dt_table->column_search = array('InfoHeader', 'InfoDeskripsi', 'InfoUsersDetail'); //set column field database for datatable searchable 
            $this->dt_table->order = array('InfoId' => 'desc'); // default order 

            // PROSES DATA
            $list = $this->dt_table->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $master) {
                  $array = explode(',', $master->InfoUsersDetail); 
                  $val_users = "";
                  foreach($array as $row){
                        $users = explode('-', $row); 
                        if($users[0] == "1"){ 
                              $val = $this->db->where("PetugasId",$users[1])->get("petugas")->row();  
                              $val_users .= '<span class="badge rounded-pill text-bg-primary">'.$val->PetugasCode.' - '.$val->PetugasName.'</span>'; 
                        }
                        else
                        {
                              $val = $this->db->where("PelangganId",$users[1])->get("pelanggan")->row();
                              $val_users .= '<span class="badge rounded-pill text-bg-primary">'.$val->PelangganCode.' - '.$val->PelangganName.'</span>'; 
                        }
                  } 
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $master->InfoHeader;
                  $row[] = $master->InfoDeskripsi;
                  $row[] = $val_users; 
                  $row[] = '  
                  <div class="d-flex flex-row">
                        <a onclick="edit_click(' . $master->InfoId . ')" class="me-2 text-warning pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i></a>
                        <a onclick="delete_click(' . $master->InfoId . ')" class="me-2 text-danger pointer" title="Edit Data"><i class="fas fa-times"></i></a>
                  </div>';
                  $data[] = $row;
            }
            $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->dt_table->count_all(),
                  "recordsFiltered" => $this->dt_table->count_filtered(),
                  "data" => $data,
            );
            //output to json format
            echo json_encode($output); 
      }
      function get_pemakaian(){ 

            // SETUP DATATABLE
            $this->dt_table->table = 'pemakaian'; 
            $this->dt_table->tablejoin =  array(
                  array(0 => 'pelanggan', 1 => 'PelangganIDMesin = PemakaianIDMesin'), 
            );
            $this->dt_table->select = array("PemakaianId", "PemakaianIDMesin", "PelangganName", "PemakaianTanggal", "PemakaianMeterAkhir"); 
            $this->dt_table->column_order = array(null, 'PemakaianIDMesin', "PelangganName",'PemakaianTanggal',  'PemakaianMeterAkhir'); //set column field database for datatable orderable
            $this->dt_table->column_search = array('PemakaianIDMesin', 'PelangganName', 'PemakaianTanggal','PemakaianMeterAkhir'); //set column field database for datatable searchable 
            $this->dt_table->order = array('PemakaianId' => 'desc'); // default order 

            // PROSES DATA
            $list = $this->dt_table->get_datatables();
            $data = array();
            $no = $_POST['start'];
            foreach ($list as $master) { 
                  $no++;
                  $row = array();
                  $row[] = $no;
                  $row[] = $master->PemakaianIDMesin;
                  $row[] = $master->PelangganName;
                  $row[] = $master->PemakaianTanggal;
                  $row[] = number_format(  $master->PemakaianMeterAkhir, 4, ',', ' ')." M<sup>3</sup>"; 
                  $row[] = '  
                  <div class="d-flex flex-row">
                        <a onclick="edit_click(' . $master->PemakaianId . ')" class="me-2 text-warning pointer" title="Edit Data"><i class="fas fa-pencil-alt"></i></a>
                        <a onclick="delete_click(' . $master->PemakaianId . ')" class="me-2 text-danger pointer" title="Edit Data"><i class="fas fa-times"></i></a>
                  </div>';
                  $data[] = $row;
            }
            $output = array(
                  "draw" => $_POST['draw'],
                  "recordsTotal" => $this->dt_table->count_all(),
                  "recordsFiltered" => $this->dt_table->count_filtered(),
                  "data" => $data,
            );
            //output to json format
            echo json_encode($output); 
      } 

      function tarif_data($id){  
            $row  = $this->db->where("HargaId",$id)->get("harga")->row(); 
            echo json_encode($row); 
      } 
      function tarif_add(){ 
            $this->db->insert('harga', $this->input->post());
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function tarif_edit($id){ 
            $this->db->update('harga', $this->input->post(), array("HargaId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true"; 
            exit;
      }
      function tarif_delete($id){ 
            $this->db->delete('harga', array("HargaId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }

      function petugas_next_kode(){
            $query = $this->db->query("SELECT CAST((ifnull(MAX(SUBSTRING(PetugasCode, 3, 5)),0) + 1) AS SIGNED) as max FROM petugas")->result();
		foreach ($query as $rows) {
			$id = $rows->max;
			switch (strlen($id)) {
				case 1:
					$nextid = "ID0000" . $id;
					echo $nextid;
                              return false;
				case 2:
					$nextid = "ID000" . $id;
					echo $nextid;
                              return false;
				case 3:
					$nextid = "ID00" . $id;
					echo $nextid;
                              return false;
				case 4:
					$nextid = "ID0" . $id;
					echo $nextid;
                              return false;
				case 5:
					$nextid = "ID" . $id;
					echo $nextid;
                              return false;
				default:
					$nextid = "ID00000";
					echo $nextid;
                              return false;
			}
		}
      } 
      function petugas_data($id){  
            $row  = $this->db->where("PetugasId",$id)->get("petugas")->row(); 
            echo json_encode($row); 
      }
      function petugas_add(){
            $this->db->insert('petugas', 
                  array(
                        "PetugasCode"=>$this->input->post("PetugasCode"),
                        "PetugasName"=>$this->input->post("PetugasName"),
                        "PetugasEmail"=>$this->input->post("PetugasEmail"),
                        "PetugasNoHp"=>$this->input->post("PetugasNoHp"),
                        "PetugasPassword"=> $this->M_login->EncryptedPassword($this->input->post("PetugasPassword")),
                  ) 
            );
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function petugas_edit($id){
            if($this->input->post("PetugasPassword") == ""){
                  $this->db->update('petugas', array(
                        "PetugasCode"=>$this->input->post("PetugasCode"),
                        "PetugasName"=>$this->input->post("PetugasName"),
                        "PetugasEmail"=>$this->input->post("PetugasEmail"),
                        "PetugasNoHp"=>$this->input->post("PetugasNoHp"), 
                  ) , array("PetugasId" => $id)); 
            }else{
                  $this->db->update('petugas', array(
                        "PetugasCode"=>$this->input->post("PetugasCode"),
                        "PetugasName"=>$this->input->post("PetugasName"),
                        "PetugasEmail"=>$this->input->post("PetugasEmail"),
                        "PetugasNoHp"=>$this->input->post("PetugasNoHp"),
                        "PetugasPassword"=> $this->M_login->EncryptedPassword($this->input->post("PetugasPassword")),
                  ) , array("PetugasId" => $id)); 
            }
           
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function petugas_delete($id){ 
            $this->db->delete('petugas', array("PetugasId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }

      function pelanggan_next_kode(){
            $query = $this->db->query("SELECT CAST((ifnull(MAX(SUBSTRING(PelangganCode, 4, 5)),0) + 1) AS SIGNED) as max FROM pelanggan")->result();
		foreach ($query as $rows) {
			$id = $rows->max;
			switch (strlen($id)) {
				case 1:
					$nextid = "DGP0000" . $id;
					echo $nextid;
                              return false;
				case 2:
					$nextid = "DGP000" . $id;
					echo $nextid;
                              return false;
				case 3:
					$nextid = "ID00" . $id;
					echo $nextid;
                              return false;
				case 4:
					$nextid = "DGP0" . $id;
					echo $nextid;
                              return false;
				case 5:
					$nextid = "DGP" . $id;
					echo $nextid;
                              return false;
				default:
					$nextid = "DGP00000";
					echo $nextid;
                              return false;
			}
		}
      } 
      function pelanggan_data($id){  
            $row  = $this->db->where("PelangganId",$id)->get("pelanggan")->row(); 
            echo json_encode($row); 
      }
      function pelanggan_add(){ 
            $this->db->insert('pelanggan', 
                  array(
                        "PetugasId"=>$this->input->post("PetugasId"),
                        "HargaId"=>$this->input->post("HargaId"),
                        "PelangganCode"=>$this->input->post("PelangganCode"),
                        "PelangganName"=>$this->input->post("PelangganName"),
                        "PelangganEmail"=>$this->input->post("PelangganEmail"),
                        "PelangganNoHp"=>$this->input->post("PelangganNoHp"),
                        "PelangganAddress"=>$this->input->post("PelangganAddress"),
                        "PelangganIDMesin"=>$this->input->post("PelangganIDMesin"),
                        "PelangganAddressMap"=>$this->input->post("PelangganAddressMap"),
                        "PelangganAddressLat"=>$this->input->post("PelangganAddressLat"),
                        "PelangganAddressLng"=>$this->input->post("PelangganAddressLng"), 
                        "PelangganPassword"=> $this->M_login->EncryptedPassword($this->input->post("PelangganPassword")),
                  ) 
            );
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function pelanggan_edit($id){
            if($this->input->post("PelangganPassword") == ""){
                  $this->db->update('pelanggan', array(
                        "PetugasId"=>$this->input->post("PetugasId"),
                        "HargaId"=>$this->input->post("HargaId"),
                        "PelangganCode"=>$this->input->post("PelangganCode"),
                        "PelangganName"=>$this->input->post("PelangganName"),
                        "PelangganEmail"=>$this->input->post("PelangganEmail"),
                        "PelangganNoHp"=>$this->input->post("PelangganNoHp"),
                        "PelangganAddress"=>$this->input->post("PelangganAddress"),
                        "PelangganIDMesin"=>$this->input->post("PelangganIDMesin"),
                        "PelangganAddressMap"=>$this->input->post("PelangganAddressMap"),
                        "PelangganAddressLat"=>$this->input->post("PelangganAddressLat"),
                        "PelangganAddressLng"=>$this->input->post("PelangganAddressLng"),  
                  ) , array("PelangganId" => $id)); 
            }else{
                  $this->db->update('pelanggan', array(
                        "PetugasId"=>$this->input->post("PetugasId"),
                        "HargaId"=>$this->input->post("HargaId"),
                        "PelangganCode"=>$this->input->post("PelangganCode"),
                        "PelangganName"=>$this->input->post("PelangganName"),
                        "PelangganEmail"=>$this->input->post("PelangganEmail"),
                        "PelangganNoHp"=>$this->input->post("PelangganNoHp"),
                        "PelangganAddress"=>$this->input->post("PelangganAddress"),
                        "PelangganIDMesin"=>$this->input->post("PelangganIDMesin"),
                        "PelangganAddressMap"=>$this->input->post("PelangganAddressMap"),
                        "PelangganAddressLat"=>$this->input->post("PelangganAddressLat"),
                        "PelangganAddressLng"=>$this->input->post("PelangganAddressLng"), 
                        "PelangganPassword"=> $this->M_login->EncryptedPassword($this->input->post("PelangganPassword")),
                  ) , array("PelangganId" => $id)); 
            }
           
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function pelanggan_delete($id){ 
            $this->db->delete('pelanggan', array("PelangganId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }

      function info_add(){ 
            $this->db->insert('info', $this->input->post());
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function info_data($id){  
            $row  = $this->db->where("InfoId",$id)->get("info")->row(); 
            echo json_encode($row); 
      }
      function info_edit($id){
            $this->db->update('info', $this->input->post(), array("InfoId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true"; 
            exit;
      }
      function info_delete($id){ 
            $this->db->delete('info', array("InfoId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }

      function pemakaian_valid_idmesin(){
            $query  = $this->db->where($this->input->post())->get("pelanggan"); 
             
            if ($query->num_rows() == 1) {
                  echo json_encode(true); 
		} else {
                  echo json_encode(false); 
		}   
      }
      function pemakaian_valid_meter(){
            
            $query  = $this->db->where("PemakaianIDMesin",$this->input->post("PelangganIDMesin"))
                  ->where("PemakaianTanggal <", $this->input->post("PemakaianTanggal"))
                  ->where("PemakaianMeterAkhir >",$this->input->post("PemakaianMeterAkhir"))
                  ->get("pemakaian"); 
            if ($query->num_rows() == 1) {
                  echo json_encode(false); 
		} else {
                  echo json_encode(true); 
		}   
      } 
      function pemakaian_data($id){  
            $row  = $this->db->where("PemakaianId",$id)->get("pemakaian")->row(); 
            echo json_encode($row); 
      }
      function pemakaian_add(){ 
            $this->db->insert('pemakaian', $this->input->post());
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
      function pemakaian_edit($id){
            $this->db->update('pemakaian', $this->input->post(), array("PemakaianId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true"; 
            exit;
      }
      function pemakaian_delete($id){ 
            $this->db->delete('pemakaian', array("PemakaianId" => $id));
            echo ($this->db->affected_rows() != 1) ? "false" : "true";
            exit;
      }
}