 
<!-- Main Content -->
<main>
    <h1>Tagihan</h1>
     
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
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Minimum Pemakain</th> 
                    <th>Minimum Harga</th> 
                    <th>Harga Perkubikasi</th> 
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
                    <input type="text" id="HargaId" name="HargaId" class="form-control form-control-sm d-none" value="" > 
                    <div class=" row mb-1">
                        <label for="HargaKategori" class="col-sm-4 col-form-label">Nama<sup class="error">&nbsp;*</sup></label>
                        <div class="col-sm-8">
                            <input type="text" id="HargaKategori" name="HargaKategori" class="form-control form-control-sm" value="" required> 
                        </div>
                    </div>
                    <div class=" row mb-1">
                        <label for="HargaDeskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                        <div class="col-sm-8">
                            <input type="text" id="HargaDeskripsi" name="HargaDeskripsi" class="form-control form-control-sm" value="-"> 
                        </div>
                    </div>
                    <div class=" row mb-1">
                        <label for="HargaMinimumKubik" class="col-sm-4 col-form-label">Pemakaian Minimum</label>
                        <div class="col-sm-3 col-10">
                            <input type="text" id="HargaMinimumKubik" name="HargaMinimumKubik" class="form-control form-control-sm double" value="" required> 
                        </div>
                        <label for="MsEmployeeId" class="col-sm-3 col-form-label col-2">M<sup>3</sup></label>
                    </div>
                    <div class=" row mb-1">
                        <label for="HargaMinimumRp" class="col-sm-4 col-form-label">Harga Minimum(Rp)</label>
                        <div class="col-sm-3">
                            <input type="text" id="HargaMinimumRp" name="HargaMinimumRp" class="form-control form-control-sm double" value="" required> 
                        </div>
                    </div>
                    <div class=" row mb-1" style="display: none;">
                        <label for="MsEmployeeId" class="col-sm-4 col-form-label">Tipe Tarif</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="flat" checked>
                                <label class="form-check-label" for="inlineRadio1">Flat</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="dinamis">
                                <label class="form-check-label" for="inlineRadio2">Dinamis</label>
                            </div> 
                        </div>
                    </div>

                    <div class="flat" >
                        <div class="row mb-1 ">
                            <label for="HargaKubik" class="col-sm-4 col-form-label">Harga /M<sup>3</sup></label>
                            <div class="col-sm-3">
                                <input type="text" id="HargaKubik" name="HargaKubik" class="form-control form-control-sm double" value="" required> 
                            </div>
                        <label for="MsEmployeeId" class="col-sm-3 col-form-label col-2">Rp</label>
                        </div>
                    </div>
                    <div class="dinamis" style="display: none;"> 
                        <table id="tb_data_item" class="table table-hover align-middle responsive " style='font-family:"Sans-serif", Helvetica; font-size:80%;width:100%'>
                            <thead class="thead-dark">
                                <tr> 
                                    <th>No</th>
                                    <th>Awal Kubikasi</th>
                                    <th>Akhir Kubikasi</th>
                                    <th>Harga per kubikasi</th> 
                                </tr>
                            </thead> 
                        </table> 
                        <div class="d-flex justify-content-center " >
                            <button class="btn btn-success btn-sm py-1 me-1" id="add-item-bom" type="button">
                                <i class="fas fa-plus" aria-hidden="true"></i>
                                <span class="fw-bold">
                                    &nbsp;Tambah Item Baru
                                </span>
                            </button>
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
               "url": "<?php echo base_url('function/Client_data/get_price_category') ?>",
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
                  targets: 6,
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
        $("#add-account").click(function(){
            $("#staticBackdropLabel").html("Tambah Kategori");
            $("#HargaId").val("")  
            modal_action.show();
        })

        edit_click = function(id){
            $.ajax({
                method: "GET",
                dataType: "json", 
                url: "<?= base_url("function/client_data/tarif_data/") ?>" + id,
                success: function(data) {
                    $("#HargaKategori").val(data["HargaKategori"])
                    $("#HargaDeskripsi").val(data["HargaDeskripsi"]) 
                    $("#HargaMinimumKubik").val(data["HargaMinKubik"]) 
                    $("#HargaMinimumRp").val(data["HargaMinPrice"]) 
                    $("#HargaKubik").val(data["HargaPerKubik"]) 
                    $("#HargaId").val(data["HargaId"])  
                    
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
        $("#btn-submit").click(function(){
            // console.log("valid");
            // const forms = document.querySelectorAll('.needs-validation')

            // // Loop over them and prevent submission
            // Array.from(forms).forEach(form => {
            //     form.classList.add('was-validated') 
            // });

            //validasi
            if($("#HargaKategori").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan nama terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#HargaDeskripsi").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Deskripsi terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#HargaMinimumKubik").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Pemakaian Minimum terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#HargaMinimumRp").val() == "" )  {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Harga Minimum Pemakaian terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#HargaKubik").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Harga per kubikasi terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            } 
            if( $("#HargaId").val() == "" ){
                $.ajax({
                    method: "POST",
                    url: "<?= base_url("function/client_data/tarif_add") ?>",
                    data: {
                        "HargaKategori": $("#HargaKategori").val(),
                        "HargaDeskripsi": $("#HargaDeskripsi").val(),
                        "HargaMinKubik":$("#HargaMinimumKubik").val().replaceAll(",", ""),
                        "HargaMinPrice":$("#HargaMinimumRp").val().replaceAll(",", ""),
                        "HargaPerKubik": $("#HargaKubik").val().replaceAll(",", ""),
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
                    url: "<?= base_url("function/client_data/tarif_edit/") ?>" + $("#HargaId").val(),
                    data: {
                        "HargaKategori": $("#HargaKategori").val(),
                        "HargaDeskripsi": $("#HargaDeskripsi").val(),
                        "HargaMinKubik":$("#HargaMinimumKubik").val().replaceAll(",", ""),
                        "HargaMinPrice":$("#HargaMinimumRp").val().replaceAll(",", ""),
                        "HargaPerKubik": $("#HargaKubik").val().replaceAll(",", ""),
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