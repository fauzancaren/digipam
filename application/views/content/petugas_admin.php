 
<!-- Main Content -->
<main>
    <h1>Petugas</h1>
     
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
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>No. Hp</th> 
                    <th>email</th> 
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
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="PetugasId" name="PetugasId" class="form-control form-control-sm d-none" value="" > 
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Kode</label>
                    <div class="col-sm-8">
                        <input type="text" id="PetugasCode" name="PetugasCode" class="form-control form-control-sm" value="" readonly> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Nama<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PetugasName" name="PetugasName" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label number">No. Hp<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PetugasNoHp" name="PetugasNoHp" class="form-control form-control-sm" value=""> 
                    </div>
                </div> 
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Email<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PetugasEmail" name="PetugasEmail" class="form-control form-control-sm" value=""> 
                    </div>
                </div> 
                <hr>
                <div class=" row mb-1">
                    <label class="col-sm-12 info-text" id="infolabel">jika tidak ingin mengubah password maka dikosongkan saja password dan re password</sup></label>
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Buat Password<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="password" id="PetugasPassword" name="PetugasPassword" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Konfirmasi Password<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="password" id="PetugasRePassword" name="PetugasRePassword" class="form-control form-control-sm" value=""> 
                    </div>
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
        var table = $('#table-users').DataTable({
            "responsive": true,
            "searching": false,
            "lengthChange": false,
            "pageLength": parseInt($('#tb_row').val()),
            "processing": true,
            "serverSide": true,
            "ajax": {
               "url": "<?php echo base_url('function/Client_data/get_petugas') ?>",
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
        $("#add-account").click(function(){
            $.ajax({
                method: "GET", 
                url: "<?= base_url("function/client_data/petugas_next_kode") ?>",
                success: function(data) {
                    $("#PetugasCode").val(data)  
                    $("#PetugasId").val("")  
                    $("#infolabel").hide();
                    $("#staticBackdropLabel").html("Tambah Petugas");
                    modal_action.show();
                }
            }); 
        });

        edit_click = function(id){
            $.ajax({
                method: "GET",
                dataType: "json", 
                url: "<?= base_url("function/client_data/petugas_data/") ?>" + id,
                success: function(data) {
                    $("#PetugasId").val(data["PetugasId"]);
                    $("#PetugasCode").val(data["PetugasCode"]);
                    $("#PetugasName").val(data["PetugasName"]);
                    $("#PetugasEmail").val(data["PetugasEmail"]);
                    $("#PetugasNoHp").val(data["PetugasNoHp"]); 
                    
                    $("#staticBackdropLabel").html("Edit Petugas");
                    $("#infolabel").show();
                    modal_action.show();
                }
            });
        }
        delete_click = function(id){
            if(id==1){
                Swal.fire({
                    icon: 'error',
                    title: 'Delete Failed',
                    text: "Anda Tidak bisa menghapus petugas utama...!!!",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false;
            } 
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
                        url: "<?= base_url("function/client_data/petugas_delete/") ?>" + id,
                        success: function(data) { 
                            Swal.fire("Berhasil menghapus data!", "", "success"); 
                            load_data_table();
                        }
                    });
                }
            });
        }

        var cleave = new Cleave('#PetugasNoHp', {
            phone: true,
            phoneRegionCode: 'ID'
        });
        $("#btn-submit").click(function(){ 

            //validasi
            if($("#PetugasName").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan nama terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#PetugasNoHp").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan No HP terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#PetugasEmail").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Email terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if( $("#PetugasId").val() == "" ){
                if($("#PetugasPassword").val() == "" ) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Belum Lengkap',
                        text: "Silahkan Masukan Password terlebih dahulu",
                        // showConfirmButton: false,
                        // timer: 1500
                    });
                    return false
                }
                if($("#PetugasRePassword").val() == "" ) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Belum Lengkap',
                        text: "Silahkan Masukan Konfirmasi Password terlebih dahulu",
                        // showConfirmButton: false,
                        // timer: 1500
                    });
                    return false
                }
                if($("#PetugasPassword").val() != $("#PetugasRePassword").val() ) { 
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Belum Lengkap',
                        text: "Password dan konfirmasi password tidak sama",
                        // showConfirmButton: false,
                        // timer: 1500
                    });
                    return false
                }
            }else{
                if($("#PetugasPassword").val() != $("#PetugasRePassword").val() ) { 
                    Swal.fire({
                        icon: 'error',
                        title: 'Data Belum Lengkap',
                        text: "Password dan konfirmasi password tidak sama",
                        // showConfirmButton: false,
                        // timer: 1500
                    });
                    return false
                }
            }

            if( $("#PetugasId").val() == "" ){
                $.ajax({
                    method: "POST",
                    url: "<?= base_url("function/client_data/petugas_add") ?>",
                    data: {
                        "PetugasCode": $("#PetugasCode").val(),
                        "PetugasName": $("#PetugasName").val(),
                        "PetugasNoHp": $("#PetugasNoHp").val().replaceAll(" ", ""),
                        "PetugasEmail":$("#PetugasEmail").val(),
                        "PetugasPassword":$("#PetugasPassword").val(), 
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
                    url: "<?= base_url("function/client_data/petugas_edit/") ?>" + $("#PetugasId").val(),
                    data: {
                        "PetugasCode": $("#PetugasCode").val(),
                        "PetugasName": $("#PetugasName").val(),
                        "PetugasNoHp": $("#PetugasNoHp").val().replaceAll(" ", ""),
                        "PetugasEmail":$("#PetugasEmail").val(),
                        "PetugasPassword":$("#PetugasPassword").val(), 
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