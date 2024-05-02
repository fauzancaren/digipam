<!-- <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Chart_model'); // Memuat model Chart_model
    }

    public function index() {
        // Mendapatkan data penggunaan terakhir dari model
        $last_usage_data = $this->Chart_model->getLastUsageData();
        
        // Menyimpan tanggal terakhir ke dalam format yang dapat digunakan oleh Chart.js
        $last_date = date('Y-m-d', strtotime($last_usage_data['PemakaianTanggal']));

        // Mendapatkan data penggunaan dari model
        $data['usage_data'] = $this->Chart_model->getUsageData($last_date);

        $this->load->view('chart_view', $data); // Menampilkan view chart_view dengan data yang diterima
    }
}
?> -->