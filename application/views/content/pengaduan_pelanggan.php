<main>

    <h1>Pengaduan</h1>
    <div class="d-flex flex-row align-items-center justify-content-between pt-5">
        <h3>Riwayat Pengaduan</h3>

        <div class="d-flex flex-row align-items-center gap-3 py-3">
            <button class="btn btn-primary" id="add-Pengaduan">Buat Pengaduan</button>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-status="0" data-bs-toggle="tab"
                data-bs-target="#data-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true">Pengaduan Saya</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-status="1" data-bs-toggle="tab"
                data-bs-target="#data-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                aria-selected="false">Pengaduan Terselesaikan</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active py-4 px-3" id="data-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">

            <!-- <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-row justify-content-between align-items-baseline">
                            <h5>Terkirim</h5>
                            <span>20 april 2024</span>
                        </div>

                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum est reprehenderit veniam
                            corrupti fuga quisquam.</span>
                    </div>

                    <div class="d-flex flex-row justify-content-end align-items-center mt-4">
                        <div class="d-flex flex-row gap-2">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-row justify-content-between align-items-baseline">
                            <h5>Terkirim</h5>
                            <span>20 april 2024</span>
                        </div>

                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum est reprehenderit veniam
                            corrupti fuga quisquam.</span>
                    </div>

                    <div class="d-flex flex-row justify-content-end align-items-center mt-4">
                        <div class="d-flex flex-row gap-2">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </div>
                </li>
            </ul> -->
        </div>
    </div>
</main>

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

<script>
$(document).ready(function() {

    var modal_action = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    // Menetapkan tab aktif saat halaman dimuat
    var activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        $('.nav-link').removeClass('active');
        $('[data-status="' + activeTab + '"]').addClass('active');
        var targetPane = $('[data-status="' + activeTab + '"]').data('bs-target');
        $(targetPane).addClass('show active');
    }

    // Menangani klik tombol tab
    $('.nav-link').on('click', function() {
        var status = $(this).data('status'); // Ambil status dari data-status atribut tombol tab
        localStorage.setItem('activeTab', status); // Simpan status tab aktif di storage
        loadData(status); // Panggil fungsi untuk mengambil data sesuai dengan tab yang dipilih
    });

    // Fungsi untuk mengambil data sesuai dengan tab yang dipilih
    function loadData(status) {
        $.ajax({
            url: '<?= base_url('Client/getDataPengaduan');?>',
            type: 'POST',
            data: {
                status: status
            },
            success: function(response) {
                $('#data-tab-pane').html(response); // Menampilkan semua data dalam satu tab-pane
            }
        });
    }

    // Memuat data untuk tab aktif saat halaman dimuat
    var activeStatus = $('.nav-link.active').data('status');
    loadData(activeStatus);

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
                    url: "<?= base_url('Client/deletePengaduan/');?>" + id,
                    success: function(data) { 
                        Swal.fire({
                        icon: 'success',
                        title: "Berhasil menghapus data!", 
                        showConfirmButton: true // Tampilkan tombol OK
                    }).then(() => {
                        location.reload();
                    });
                    }
                });
            }
        });
    }

    $("#add-Pengaduan").click(function(){ 
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

});
</script>