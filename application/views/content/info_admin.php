 
<!-- Main Content -->
<main>
    <h1>Info Terbaru</h1>
     
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
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Users</th>   
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
                    <input type="text" id="InfoId" name="InfoId" class="form-control form-control-sm d-none" value="" > 
                    <div class=" row mb-1">
                        <label for="InfoHeader" class="col-sm-4 col-form-label">Judul<sup class="error">&nbsp;*</sup></label>
                        <div class="col-sm-8">
                            <input type="text" id="InfoHeader" name="InfoHeader" class="form-control form-control-sm" value="" required> 
                        </div>
                    </div>
                    <div class=" row mb-1">
                        <label for="InfoDeskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea id="InfoDeskripsi" name="InfoDeskripsi" class="form-control form-control-sm" value="-"> </textarea>
                        </div>
                    </div>
                    <div class=" row mb-1">
                        <label for="InfoUsersDetail" class="col-sm-4 col-form-label">Petugas/Pelanggan</label>
                        <div class="col-sm-8"> 
                            <select class="custom-select custom-select-sm form-select form-select-sm" id="InfoUsersDetail" name="InfoUsersDetail" style="width:100%" multiple="multiple"> 
                                <optgroup class="select2-result-selectable" label="PILIH SEMUA">
                                </optgroup>
                                <optgroup class="select2-result-selectable" label="PILIH SEMUA PETUGAS">';
                                <?php
                                $db = $this->db->get("petugas")->result(); 
                                foreach ($db as $key) { 
                                    echo '<option value="1-' . $key->PetugasId . '">' . $key->PetugasCode . '-' . $key->PetugasName . '</option>';
                                }  
                                ?>
                                </optgroup>
                                <optgroup class="select2-result-selectable" label="PILIH SEMUA PELANGGAN">';
                                <?php
                                $db = $this->db->get("pelanggan")->result(); 
                                foreach ($db as $key) { 
                                    echo '<option value="2-' . $key->PelangganId . '">' . $key->PelangganCode . '-' . $key->PelangganName . '</option>';
                                }  
                                ?>
                                </optgroup>
                            </select>
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
               "url": "<?php echo base_url('function/Client_data/get_info') ?>",
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
                  targets: 4,
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
                delimiter: ","
            })
        });
        
        $("#InfoUsersDetail").select2({
            allowClear: true,
            placeholder: 'Pilih pelanggan/petugas..',
            dropdownParent: $("#staticBackdrop") 
        });
        $(document).on("click", ".select2-results__group", function() {
            $('#InfoUsersDetail').val(null).trigger('change');
            var groupName = $(this).html();
            var options = $('#InfoUsersDetail option');
            $.each(options, function(key, value) {
               if (groupName == "PILIH SEMUA") {
                  $(value).prop("selected", "selected");
               } else {
                  if ($(value)[0].parentElement.label.indexOf(groupName) >= 0) {
                     $(value).prop("selected", "selected");
                  }
               }
            });

            $("#InfoUsersDetail").trigger("change");
            $("#InfoUsersDetail").select2('close');

        });
        $("#add-account").click(function(){
            $("#staticBackdropLabel").html("Tambah Info Terbaru");
            $("#HargaId").val("")  
            modal_action.show();
        })

        edit_click = function(id){
            $.ajax({
                method: "GET",
                dataType: "json", 
                url: "<?= base_url("function/client_data/info_data/") ?>" + id,
                success: function(data) {
                    $("#InfoHeader").val(data["InfoHeader"])
                    $("#InfoDeskripsi").val(data["InfoDeskripsi"]) 
                    $("#InfoUsersDetail").val(data["InfoUsersDetail"].split(",")).trigger('change.select2'); 
                    $("#InfoId").val(data["InfoId"])

                    
                    $("#staticBackdropLabel").html("Edit Info");
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
                        url: "<?= base_url("function/client_data/info_delete/") ?>" + id,
                        success: function(data) { 
                            Swal.fire("Berhasil menghapus data!", "", "success"); 
                            load_data_table();
                        }
                    });
                }
            });
        }
        $("#btn-submit").click(function(){
           
            //validasi
            if($("#InfoHeader").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan judul terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#InfoDeskripsi").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Deskripsi terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if( $("#InfoUsersDetail").select2("val") == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan pelanggan / petugas terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            console.log();
            if( $("#InfoId").val() == "" ){
                $.ajax({
                    method: "POST",
                    url: "<?= base_url("function/client_data/info_add") ?>",
                    data: {
                        "InfoHeader": $("#InfoHeader").val(),
                        "InfoDeskripsi": $("#InfoDeskripsi").val(),
                        "InfoUsersDetail":$("#InfoUsersDetail").select2("val").toString(), 
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
                    url: "<?= base_url("function/client_data/info_edit/") ?>" + $("#InfoId").val(),
                    data: {
                        "InfoHeader": $("#InfoHeader").val(),
                        "InfoDeskripsi": $("#InfoDeskripsi").val(),
                        "InfoUsersDetail":$("#InfoUsersDetail").select2("val").toString(), 
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