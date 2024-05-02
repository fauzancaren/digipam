
<!-- Main Content -->
<main>
    <h1>Dashbord</h1>
    <div class="d-flex flex-row align-items-center justify-content-between pt-3">
    <h2>Info Pemakaian Mesin</h2>

        <div class="d-flex flex-row align-items-center gap-3 py-3">
            <span>Total Penggunaan : <span class="fw-bold fs-5" id="totalUsageSpan"></span> m&sup3;</span>
            <span> Jangka Waktu - </span>
            <select class="form-select w-auto" id="timeRange">
                <option value="7">7 Hari Terakhir</option>
                <option value="14">14 Hari Terakhir</option>
                <option value="30">30 Hari Terakhir</option>
            </select>
        </div>
    </div>

    <canvas id="myChart"></canvas>

</main>
<!-- End of Main Content -->

<script>
// Mendapatkan elemen canvas sebagai target untuk chart
const ctx = document.getElementById('myChart').getContext('2d');

// Variabel global untuk menyimpan chart
let myChart;

// Fungsi untuk membuat atau memperbarui grafik dengan label yang diberikan
function createOrUpdateChart(labels, data, idMesin) {

    const labelSet = `Penggunaan Mesin  (ID Mesin: ${idMesin}) `;

    if (typeof myChart === 'undefined') {
        myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: labelSet,
                    data: data,
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
            }
        });
    } else {
        myChart.data.labels = labels;
        myChart.data.datasets[0].data = data;
        myChart.data.datasets[0].label = labelSet;
        myChart.update();
    }
}

// Fungsi untuk membuat label berdasarkan rentang waktu yang dipilih
function createLabels(range) {
    const labels = [];
    const today = new Date();
    const startDate = new Date(today);

    // Menghitung tanggal mulai berdasarkan rentang waktu yang dipilih
    startDate.setDate(today.getDate() - range + 1);

    // Loop untuk membuat label berdasarkan tanggal mulai
    for (let i = 0; i < range; i++) {
        const date = new Date(startDate);
        date.setDate(startDate.getDate() + i);
        const formattedDate = date.toISOString().slice(0, 10);
        labels.push(formattedDate);
    }
    return labels;
}

function changeLabelFormat(labels) {
    const formattedLabels = labels.map(label => {
        const parts = label.split('-'); // split tahun, bulan, dan tanggal
        const year = parts[0];
        const month = parseInt(parts[1]);
        const day = parseInt(parts[2]);
        const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December'
        ];
        const formattedMonth = monthNames[month - 1]; // Ambil nama bulan sesuai indeks
        return `${year} ${formattedMonth} ${day}`; // format tahun, bulan, dan tanggal
    });
    return formattedLabels;
}

// update grafik berdasarkan dropdown
function updateChart(range, idMesin) {
    const labels = createLabels(range);
    const formattedLabels = changeLabelFormat(labels);

    // Mendapatkan data dari PHP yang diteruskan oleh view
    const dataFromPHP = <?php echo json_encode($usage_data); ?>;

    // Memuat data penggunaan dari PHP ke Chart.js
    const data = labels.map(label => {
        const dataForDate = dataFromPHP.find(item => item.PemakaianTanggal.includes(label));
        return dataForDate ? parseFloat(dataForDate.PemakaianMeterAkhir) : 0; // Mengonversi ke desimal
    });

    // Menghitung jumlah data dari rentang waktu yang dipilih
    const totalUsage = data.reduce((acc, curr) => acc + curr, 0);

    // Memanggil fungsi untuk membuat atau memperbarui grafik dengan label yang diberikan
    createOrUpdateChart(formattedLabels, data, idMesin);

    $('#totalUsageSpan').text(totalUsage.toFixed(2));
}


// Defaultnya menampilkan data 7 hari terakhir
document.addEventListener('DOMContentLoaded', function() {
    const idMesin = `<?= $this->session->userdata('PelangganIDMesin') ?>`;
    updateChart(7, idMesin);
});


// event listener untuk perubahan dropdown
document.getElementById('timeRange').addEventListener('change', function() {
    const range = parseInt(this.value);
    const idMesin = `<?= $this->session->userdata('PelangganIDMesin') ?>`;
    updateChart(range, idMesin);
});
</script>