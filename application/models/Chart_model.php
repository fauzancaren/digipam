<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by Fauzan Caren.
 * User: OBI-WEB
 * Ver: v5.0.0
 * Date: 05/19/2021
 * To change this template use File | Settings | File Templates.
 */

 
class Chart_model extends CI_Model {
    public function getUsageData($id) {
        $this->db->where('PemakaianIDMesin', $id); 
        $query = $this->db->get('pemakaian');
        return $query->result_array(); // Mengembalikan hasil query sebagai array
    }
}
