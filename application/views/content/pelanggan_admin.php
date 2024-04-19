 
<!-- Main Content -->
<main>
    <h1>Pelanggan</h1>
     
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
                    <th>Alamat</th> 
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table> 
        <div class="d-flex justify-content-center"> 
            <button class="btn btn-sm btn-primary" id="add-account">Tambah Data</button> 
        </div>
    </div> 

    
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="PelangganId" name="PelangganId" class="form-control form-control-sm d-none" value=""> 
                <div class=" row mb-1">
                    <label for="PelangganCode" class="col-sm-4 col-form-label">Nama<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PelangganCode" name="PelangganCode" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganName" class="col-sm-4 col-form-label">Nama<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PelangganName" name="PelangganName" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganEmail" class="col-sm-4 col-form-label">Email<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PelangganEmail" name="PelangganEmail" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganNoHp" class="col-sm-4 col-form-label number">No. Hp<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PelangganNoHp" name="PelangganNoHp" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganAddress" class="col-sm-4 col-form-label">Alamat<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <textarea type="text" id="PelangganAddress" name="PelangganAddress" class="form-control form-control-sm" value=""></textarea>
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganIDMesin" class="col-sm-4 col-form-label">ID Mesin<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="PelangganIDMesin" name="PelangganIDMesin" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PetugasId" class="col-sm-4 col-form-label">Petugas<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <select class="custom-select custom-select-sm form-select form-select-sm" id="PetugasId" name="PetugasId" style="width:100%">
                        <?php 
                            foreach($_petugas as $row){
                                echo  '<option value="'.$row->PetugasId.'">'.$row->PetugasCode.' - '.$row->PetugasName.'</option>';
                            }
                        ?> 
                        </select>
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="HargaId" class="col-sm-4 col-form-label">Tarif<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <select class="custom-select custom-select-sm form-select form-select-sm" id="HargaId" name="HargaId" style="width:100%">
                        <?php
                            foreach($_tarif as $row){
                                echo  '<option value="'.$row->HargaId.'">'.$row->HargaKategori.' - '.$row->HargaDeskripsi.'</option>';
                            }
                        ?> 
                        </select>
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsEmployeeId" class="col-sm-4 col-form-label">Titik Map<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <div class="bg-pinpoint">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <span id="PelangganAddressMap" class="label-small px-1 col-form-label">Tandai lokasi dalam peta</span>
                            <button type="button" class="btn btn-light py-1 ms-auto btn-sm" id="select-map" >Tandai Lokasi</button>
                        </div> 
                        <input id="PelangganAddressLat" name="PelangganAddressLat" type="text" class="form-control form-control-sm" value="-6.265707593132433" style="display:none">
                        <input id="PelangganAddressLng" name="PelangganAddressLng" type="text" class="form-control form-control-sm" value="106.77526944082672" style="display:none">
                    </div>
                </div>
                <hr>
                <div class=" row mb-1">
                    <label class="col-sm-12 info-text" id="infolabel">jika tidak ingin mengubah password maka dikosongkan saja password dan re password</sup></label>
                    <label for="PelangganPassword" class="col-sm-4 col-form-label">Buat Password<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="password" id="PelangganPassword" name="PelangganPassword" class="form-control form-control-sm" value=""> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="PelangganRePassword" class="col-sm-4 col-form-label">Konfirmasi Password<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="password" id="PelangganRePassword" name="PelangganRePassword" class="form-control form-control-sm" value=""> 
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
    
    <div class="modal fade" id="modal-action-map" tabindex="-1" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg"  name="form-action-delivery">
                <div class="modal-header">
                    <h6 class="modal-title"><i class="fas fa-map-marker-alt text-secondary" aria-hidden="true"></i> &nbsp;Pilih lokasi map</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="alert alert-orange d-flex align-items-center m-2" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Pastikan titik map sesuai dengan alamat yang tercantum sebelumnya
                    </div>
                </div>
                <div class="modal-body">
                    <div style="height:450px;display:block">
                        <input id="text-pac-input" type="text" class="form-control" placeholder="Tulis jalan / perumahan / gedung" aria-describedby="label-pac-input">
                        <div id="map" style="height: 100%;"></div>
                    </div>
                </div>
                <div class="modal-footer m-0 p-2" style="border-radius:0.3rem;border-top-right-radius:0px;border-top-left-radius:0px;">
                    <div id="location-text"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End of Main Content -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpTnP-tVCA2m8Y5dYwOHKR8wSxnT_KEus&libraries=places&language=id&region=ID&callback=initMap" defer></script>
	
<script> 
    var api_map, api_input, api_searchBox, api_markers, api_geocoder;
    var modal_action = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    var table = $('#table-users').DataTable({
        "responsive": true,
        "searching": false,
        "lengthChange": false,
        "pageLength": parseInt($('#tb_row').val()),
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo base_url('function/Client_data/get_pelanggan') ?>",
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
    var cleave = new Cleave('#PelangganNoHp', {
        phone: true,
        phoneRegionCode: 'ID'
    });

        
    $("#add-account").click(function(){ 
        $.ajax({
            method: "GET", 
            url: "<?= base_url("function/client_data/pelanggan_next_kode") ?>",
            success: function(data) {
                $("#PelangganCode").val(data)  
                $("#PelangganId").val("")  
                $("#infolabel").hide();
                $("#PelangganAddressMap").html("Tandai lokasi dalam peta") 
                $("#PelangganAddressLat").val("-6.265707593132433")  
                $("#PelangganAddressLng").val("106.77526944082672") 
                $("#staticBackdropLabel").html("Tambah Pelanggan");
                modal_action.show();
            }
        }); 
    });

    edit_click = function(id){
        $.ajax({
            method: "GET",
            dataType: "json", 
            url: "<?= base_url("function/client_data/pelanggan_data/") ?>" + id,
            success: function(data) {
                $("#PelangganId").val(data["PelangganId"]);
                $("#PelangganCode").val(data["PelangganCode"]);
                $("#PelangganName").val(data["PelangganName"]);
                $("#PelangganEmail").val(data["PelangganEmail"]);
                $("#PelangganNoHp").val(data["PelangganNoHp"]); 
                $("#PelangganAddress").val(data["PelangganAddress"]); 
                $("#PelangganIDMesin").val(data["PelangganIDMesin"]); 
                $("#PelangganAddressMap").html(data["PelangganAddressMap"]); 
                $("#PelangganAddressLat").val(data["PelangganAddressLat"]); 
                $("#PelangganAddressLng").val(data["PelangganAddressLng"]); 

                $("#PetugasId").val(data["PetugasId"]).change();
                $("#HargaId").val(data["HargaId"]).change();
                
                $("#staticBackdropLabel").html("Edit Pelanggan");
                $("#infolabel").show();
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
                    url: "<?= base_url("function/client_data/pelanggan_delete/") ?>" + id,
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
        if($("#PelangganCode").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Code terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#PelangganName").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan nama terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#PelangganEmail").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Email terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#PelangganNoHp").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#PelangganAddress").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Alamat terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#PelangganIDMesin").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan ID Mesin terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if( $("#PelangganId").val() == "" ){
            if($("#PelangganPassword").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Password terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#PelangganRePassword").val() == "" ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Data Belum Lengkap',
                    text: "Silahkan Masukan Konfirmasi Password terlebih dahulu",
                    // showConfirmButton: false,
                    // timer: 1500
                });
                return false
            }
            if($("#PelangganPassword").val() != $("#PelangganRePassword").val() ) { 
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
            if($("#PelangganPassword").val() != $("#PelangganRePassword").val() ) { 
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

        if( $("#PelangganId").val() == "" ){
            $.ajax({
                method: "POST",
                url: "<?= base_url("function/client_data/pelanggan_add") ?>",
                data: {
                    "PelangganCode": $("#PelangganCode").val(),
                    "PelangganName": $("#PelangganName").val(),
                    "PelangganEmail": $("#PelangganEmail").val(),
                    "PelangganNoHp":$("#PelangganNoHp").val().replaceAll(" ", ""),
                    "PelangganAddress":$("#PelangganAddress").val(), 
                    "PelangganIDMesin":$("#PelangganIDMesin").val(),
                    "PelangganAddressMap":$("#PelangganAddressMap").html(),
                    "PelangganAddressLat":$("#PelangganAddressLat").val(),
                    "PelangganAddressLng":$("#PelangganAddressLng").val(),
                    "PelangganPassword":$("#PelangganPassword").val(),
                    "PetugasId":$("#PetugasId").val(),
                    "HargaId":$("#HargaId").val(),
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
                url: "<?= base_url("function/client_data/pelanggan_edit/") ?>" + $("#PelangganId").val(),
                data: { 
                    "PelangganCode": $("#PelangganCode").val(),
                    "PelangganName": $("#PelangganName").val(),
                    "PelangganEmail": $("#PelangganEmail").val(),
                    "PelangganNoHp":$("#PelangganNoHp").val().replaceAll(" ", ""),
                    "PelangganAddress":$("#PelangganAddress").val(), 
                    "PelangganIDMesin":$("#PelangganIDMesin").val(),
                    "PelangganAddressMap":$("#PelangganAddressMap").html(),
                    "PelangganAddressLat":$("#PelangganAddressLat").val(),
                    "PelangganAddressLng":$("#PelangganAddressLng").val(),
                    "PelangganPassword":$("#PelangganPassword").val(),
                    "PetugasId":$("#PetugasId").val(),
                    "HargaId":$("#HargaId").val(),
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

    function initMap() {
        $("#select-map").click(function() {
            mode = "action map";
            $("#modal-action-map").modal("show");
            modal_action.hide();
            if ($("#PelangganAddressMap").text() != "Tandai lokasi dalam peta") {
                maplocation = {
                    lat: $("#PelangganAddressLat").val(),
                    lng: $("#PelangganAddressLng").val()
                };
                mapaddress = {
                    address: $("#PelangganAddressMap").text()
                };
            } else {
                maplocation = {
                    lat: -6.265707593132433,
                    lng: 106.77526944082672
                };
                mapaddress = {
                    address: "Pondok Pinang, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia"
                };
            }
            api_map.setCenter(maplocation);
        }); 

        var maplocation = {lat: -6.265707593132433, lng: 106.77526944082672};
        var mapaddress = {address : "Pondok Pinang, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta, Indonesia"};
        
        set_location_address = function(location,address){
            maplocation = location;
            address = address;
        }

        function set_text_address(){
                $("#location-text").html("<span>" + mapaddress.address + "</span>")
        }

        api_geocoder = new google.maps.Geocoder();
        api_map = new google.maps.Map(document.getElementById("map"), {
                center: maplocation,
                zoom: 20,
                zoomControl : false,
                keyboardShortcuts : false,
                disableDefaultUI: true,
                clickableIcons: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        api_map.setZoom(19);
        api_map.setCenter(maplocation);
        $("<div/>").addClass("centerMarker").appendTo(api_map.getDiv());
        $("<div class='centerButton'>Pilih lokasi ini<div/>").appendTo(api_map.getDiv()).click(function(){
            $("#PelangganAddressMap").text(mapaddress.address);
            $("#PelangganAddressLat").val(maplocation.lat);
            $("#PelangganAddressLng").val(maplocation.lng);
            $("#modal-action-map").modal("hide");
            modal_action.show();
        });

        // Create the search box and link it to the UI element.
        api_input = document.getElementById("text-pac-input");
        api_map.controls[google.maps.ControlPosition.TOP_LEFT].push(api_input);
        api_searchBox = new google.maps.places.SearchBox(api_input);

        // Bias the SearchBox results towards current maps viewport.
        api_map.addListener("bounds_changed", () => {
            maplocation = api_map.getCenter();
            api_searchBox.setBounds(api_map.getBounds());
            set_text_address();
        });
        api_map.addListener("mouseup", () => {
                
            $(".centerMarker").removeClass("mousedown");
            maplocation = api_map.getCenter();
            api_geocoder
            .geocode({ location: maplocation})
            .then((response) => {
                if (response.results[0]) {
                    try{
                        mapaddress.address = response.results[0].plus_code.compound_code.slice(8);
                    }catch(err){
                        mapaddress.address = response.results[0].formatted_address;
                    }
                    set_text_address();
                }else{
                    console.log("api_map.addListener geocode => No results found");
                }
            })
            .catch((e) => console.log("api_map.addListener geocode => No results found" + e));
        });
        api_map.addListener("mousedown", () => { 
            $(".centerMarker").addClass("mousedown");
        });
        api_markers = [];

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        api_searchBox.addListener("places_changed", () => {
            const places = api_searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }
            // Clear out the old api_markers.
            api_markers.forEach((marker) => {
                marker.setMap(null);
            });
            api_markers = [];

            // For each place, get the icon, name and location.
            const bounds = new google.maps.LatLngBounds();
            places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                api_markers.push(
                    new google.maps.Marker({
                        api_map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                    })
                );
                maplocation = place.geometry.location;
                try{
                    mapaddress.address = place.plus_code.compound_code.slice(8);
                }catch(err){
                    mapaddress.address = place.formatted_address;
                }
                set_text_address();
                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            api_map.fitBounds(bounds);
            api_map.setZoom(19);
            api_map.setCenter(maplocation);
        });
    }
    window.initMap = initMap;
 
</script>