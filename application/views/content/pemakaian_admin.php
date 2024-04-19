 
<!-- Main Content -->
<main>
    <h1>Pemakaian</h1>
     
    <!-- Recent Orders Table -->
    <div class="recent-orders">  
        <div class="row">
            <div class="col-lg-6 col-12"> 
                <div class="row mb-1 align-items-center">
                    <label for="tb_row" class="col-sm-3 col-form-label">Tampilkan</label>
                    <div class="col-3">
                        <select class="custom-select custom-select-sm form-control form-control-sm" id="tb_row" name="tb_row"> 
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <label class="col-3 col-form-label ps-0">baris</label>
                </div>
            </div>
            <div class="col-lg-6 col-12"> 
                <div class="row mb-1">
                    <label for="tb_search" class="col-sm-3 col-form-label">Pencarian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="tb_search">
                    </div>
                </div> 
            </div>
        </div>
        <table id="table-users" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Mesin</th>
                    <th>Pelanggan</th>
                    <th>Tanggal Update</th> 
                    <th>Meter Akhir</th>  
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="d-flex justify-content-center"> 
            <button class="btn btn-sm btn-primary" id="add-account">Tambah Data</button> 
        </div>
    </div> 
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content needs-validation" >
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori dan harga</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="PemakaianId" name="PemakaianId" class="form-control form-control-sm d-none" value="" > 
                    <div class=" row mb-1">
                        <label for="PemakaianIDMesin" class="col-sm-4 col-form-label">ID Mesin<sup class="error">&nbsp;*</sup></label>
                        <div class="col-sm-8">
                            <input type="text" id="PemakaianIDMesin" name="PemakaianIDMesin" class="form-control form-control-sm" value="" required> 
                        </div>
                    </div>  
                    <div class="row mb-1 ">
                        <label for="PemakaianTanggal" class="col-sm-4 col-form-label">Tanggal Update</label>
                        <div class="col-sm-8">
                            <input type="text" id="PemakaianTanggal" name="PemakaianTanggal" class="form-control form-control-sm" value="" required> 
                        </div> 
                    </div> 
                    <div class=" row mb-1">
                        <label for="PemakaianMeterAkhir" class="col-sm-4 col-form-label">Penggunaan AKhir</label>
                        <div class="col-sm-3 col-10">
                            <input type="text" id="PemakaianMeterAkhir" name="PemakaianMeterAkhir" class="form-control form-control-sm double" value="" required> 
                        </div>
                        <label for="MsEmployeeId" class="col-sm-3 col-form-label col-2">M<sup>3</sup></label>
                    </div>  

                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Main Content -->
<script>
    $( document ).ready(function() { 
        var modal_action = new bootstrap.Modal(document.getElementById('staticBackdrop')); 
        var StartDateContent = moment();
        var EndDateContent = moment();
        $('#PemakaianTanggal').daterangepicker({
            parentEl: "#staticBackdrop",
            startDate: StartDateContent,
            endDate: EndDateContent,
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour:true,
            timePickerSeconds:true,
            locale: {
                "format": 'YYYY-MMMM-DD HH:mm:ss',
            }
        }, Date_content);
        Date_content(StartDateContent, EndDateContent);

        function Date_content(start, end) {
            StartDateContent = start;
        }

        var table = $('#table-users').DataTable({
            "responsive": true,
            "searching": false,
            "lengthChange": false,
            "pageLength": parseInt($('#tb_row').val()),
            "processing": true,
            "serverSide": true,
            "ajax": {
               "url": "<?php echo base_url('function/Client_data/get_pemakaian') ?>",
               "type": "POST",
               "data": function(data) {
                  data.search['value'] = $('#tb_search').val(); 
               }
            },
            "order": [],
            "columnDefs": [{
                  "orderable": false,
                  targets: 0
               },
               {
                  "orderable": false,
                  targets: 5,
                  "className": 'details-control', 
               }, 
            ], 
        }); 
        $('#table-users').on('processing.dt', function(e, settings, processing) {
            if (processing) {
               // $('#tb_data_respon').hide();
            } else {
               // $('#tb_data_respon').show();
            }
        });
        $('#tb_search').keyup(function() {
            table.ajax.reload(null, false).responsive.recalc().columns.adjust();
        });
        $('#tb_row').change(function() {
            table.page.len(parseInt($('#tb_row').val())).draw();
        });
        
        load_data_table = function() {
            table.ajax.reload(null, false).responsive.recalc().columns.adjust();
            modal_action.hide();
         };  
        $("[name='inlineRadioOptions']").click(function(){
            if($(this).val() == "flat"){
                $(".dinamis").css("display", "none"); 
                $(".flat").css("display", "block"); 
            }else{
                $(".dinamis").css("display", "block"); 
                $(".flat").css("display", "none");  
            }
        });
        var doubleinputs = Array.from(document.getElementsByClassName("double"));
        doubleinputs.forEach(function(doubleinput) {
            new Cleave(doubleinput, {
                numeral: true,
                numeralDecimalMark: ".",
                numeralDecimalScale: 4,
                delimiter: ","
            })
        });
        $("#add-account").click(function(){
            $("#staticBackdropLabel").html("Tambah Pemakaian");
            $("#PemakaianId").val("")  
            modal_action.show();
        })

        edit_click = function(id){
            $.ajax({
                method: "GET",
                dataType: "json", 
                url: "<?= base_url("function/client_data/pemakaian_data/") ?>" + id,
                success: function(data) {
                    $("#PemakaianId").val(data["PemakaianId"])
                    $("#PemakaianIDMesin").val(data["PemakaianIDMesin"])  
                    $("#PemakaianMeterAkhir").val(data["PemakaianMeterAkhir"])  
                    $('#PemakaianTanggal').data('daterangepicker').setStartDate(moment(data["PemakaianTanggal"]));
                    $("#staticBackdropLabel").html("Edit Kategori");
                    modal_action.show();
                }
            });
        }

        delete_click = function(id){
            Swal.fire({
                icon: 'error',
                title: "Hapus Data?", 
                text: "Anda yakin ingin menghapus data ini?", 
                showCancelButton: true,
                confirmButtonText: "Submit", 
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "GET",
                        dataType: "json", 
                        url: "<?= base_url("function/client_data/tarif_delete/") ?>" + id,
                        success: function(data) { 
                            Swal.fire("Berhasil menghapus data!", "", "success"); 
                            load_data_table();
                        }
                    });
                }
            });
        }
        $("#btn-submit").click(async function(){
              
            //validasi
            if($("#PemakaianIDMesin").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan ID Mesin terlebih dahulu", 
                });
                return false
            }
            async function validIdMesin() {
                let result;

                try {
                    result = await $.ajax({
                        url: "<?= base_url("function/client_data/pemakaian_valid_idmesin/") ?>",
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            "PelangganIDMesin": $("#PemakaianIDMesin").val()
                        }
                    });

                    return result;
                } catch (error) {
                    console.error(error);
                }
            }
            const idmesin = await validIdMesin();
            if(idmesin == false){
                Swal.fire({
                    icon: 'error',
                    title: 'Data Tidak Valid',
                    text: "Data ID Mesin tidak ditemukan...!!! Periksa kembali data ID Mesin ", 
                });
                return false
            }

            if($("#PemakaianTanggal").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan masukan Deskripsi terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }

            if($("#PemakaianMeterAkhir").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan masukan penggunaan Akhir terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }   
            if( $("#PemakaianId").val() == "" ){
                async function validMeterAkhir() {
                    let result; 
                    try {
                        result = await $.ajax({
                            url: "<?= base_url("function/client_data/pemakaian_valid_meter/") ?>",
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                "PelangganIDMesin": $("#PemakaianIDMesin").val(),
                                "PemakaianTanggal": StartDateContent.format('YYYY-MM-DD HH:mm:ss'),
                                "PemakaianMeterAkhir": $("#PemakaianMeterAkhir").val()
                            }
                        });

                        return result;
                    } catch (error) {
                        console.error(error);
                    }
                }
                const meterakhir = await validMeterAkhir();
                if(meterakhir == false){
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Tidak Valid',
                        text: "Nilai Akhir tidak boleh lebih kecil dari nilai sebelumnya", 
                    });
                    return false
                }

                $.ajax({
                    method: "POST",
                    url: "<?= base_url("function/client_data/pemakaian_add") ?>",
                    data: {
                        "PemakaianIDMesin": $("#PemakaianIDMesin").val(),
                        "PemakaianTanggal": StartDateContent.format('YYYY-MM-DD HH:mm:ss'),
                        "PemakaianMeterAkhir":$("#PemakaianMeterAkhir").val().replaceAll(",", ""), 
                    },
                    success: function(data) {
                        $("#btn-submit").html("Simpan");
                        console.log(data);
                        if (data) {
                            Swal.fire({
                                icon: 'success',
                                text: 'Tambah data berhasil',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                timer: 1500,
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    load_data_table();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: 'Tambah data gagal',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                timer: 1500
                            });
                        }
                    }
                });
            }else{
                $.ajax({
                    method: "POST",
                    url: "<?= base_url("function/client_data/pemakaian_edit/") ?>" + $("#PemakaianId").val(),
                    data: {
                        "PemakaianIDMesin": $("#PemakaianIDMesin").val(),
                        "PemakaianTanggal": StartDateContent.format('YYYY-MM-DD HH:mm:ss'),
                        "PemakaianMeterAkhir":$("#PemakaianMeterAkhir").val().replaceAll(",", ""), 
                    },
                    success: function(data) {
                        $("#btn-submit").html("Simpan");
                        console.log(data);
                        if (data) {
                            Swal.fire({
                                icon: 'success',
                                text: 'Edit data berhasil',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                timer: 1500,
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    load_data_table();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                text: 'Edit data gagal',
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                allowEscapeKey: false,
                                timer: 1500
                            });
                        }
                    }
                });
            } 
        }); 
    });
</script>