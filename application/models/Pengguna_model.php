<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Fauzan Caren.
 * User: OBI-WEB
 * Ver: v5.0.0
 * Date: 05/19/2021
 * To change this template use File | Settings | File Templates.
 */

 class Pengguna_model extends CI_Model {
    public function getPengaduan($id, $status) {
        $this->db->where('pengaduanRefPelanggan', $id);
        $this->db->where('pengaduanStatus', $status); 
        $query = $this->db->get('pengaduan');
        return $query->result_array(); // Mengembalikan hasil query sebagai array
    }

    public function deletePengaduan($id)
    {
        $this->db->where('pengaduanID', $id);
        $this->db->delete('pengaduan');
    }
}