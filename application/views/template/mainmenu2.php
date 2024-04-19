<!DOCTYPE html>
<html lang="en">

<head>
	<title>&nbsp;Master Data - Dashboard</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" href="<?= base_url("asset/image/obi-erp/logo.ico") ?>">
	<meta name="author" content="Syahrul Fauzan">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="OBI-ERP">
	<meta name="theme-color" content="#42b549">
	<meta name="page-type" content="productdetailpage-desktop" data-rh="true">
	<meta name="title" content="Detail Transaksi" data-rh="true">
	<meta name="description" content="Menu Aplikasi OBI - ERP" data-rh="true">

	<meta name="twitter:card" content="product" data-rh="true">
	<meta name="twitter:site" content="@omahbata" data-rh="true">
	<meta name="twitter:creator" content="@omahbata" data-rh="true">
	<meta name="twitter:title" content="Aplikasi OBI-ERP" data-rh="true">
	<meta name="twitter:description" content="Menu Aplikasi OBI - ERP" data-rh="true">
	<meta name="twitter:image" href="<?= base_url("asset/image/obi-erp/logo.png") ?>" data-rh="true">

	<link href="<?= base_url("asset/bootstrap-5.2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/datepicker/daterangepicker.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/fontawesome5/css/all.min.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("asset/croppie/croppie.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/select2/css/select2.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/datatable/datatables.min.css") ?>" rel="stylesheet" type="text/css">
	<!-- <link href="<?= base_url("asset/mainmenu.css?version=1") ?>" rel="stylesheet" type="text/css"> -->
	<link href="<?= base_url("asset/obi-erp.css?version=1.6.2") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/sidebar.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/sales.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/dropzone/dropzone.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/contextmenu/jquery.contextMenu.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/signature/css/jquery.signature.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/signature/css/jquery-ui.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/date-bootstrap/css/bootstrap-datepicker.min.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("asset/fontgoogle/poppins.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("asset/fontgoogle/roboto.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("asset/combotree/comboTreePlugin.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/emoji/emojionearea.min.css") ?>" rel="stylesheet" type="text/css">
	<!-- <link href="<?= base_url("asset/introjs/introjs.css") ?>" rel="stylesheet" type="text/css">  -->
	 
	<script src="<?= base_url("asset/bootstrap-5.2/js/bootstrap.bundle.min.js") ?>"></script>
	<script src="<?= base_url("asset/jquery/jquery-3.6.0.min.js") ?>"></script>
	<script src="<?= base_url("asset/cleave/cleave.min.js") ?>"></script>
	<script src="<?= base_url("asset/cleave/cleave-phone.id.js") ?>"></script>
	<script src="<?= base_url("asset/jquery/jquery.validate.min.js") ?>"></script>
	<script src="<?= base_url("asset/jquery/jquery.moment.min.js") ?>"></script>
	<script src="<?= base_url("asset/sweetalert/dist/sweetalert2.all.min.js") ?>"></script>
	<script src="<?= base_url("asset/croppie/croppie.min.js") ?>"></script>
	<script src="<?= base_url("asset/datepicker/daterangepicker.js") ?>"></script>
	<script src="<?= base_url("asset/select2/js/select2.full.min.js") ?>"></script> 
	<script src="<?= base_url("asset/datatable/datatables.min.js") ?>"></script>
	<script src="<?= base_url("asset/datatable/rowgroup.js") ?>"></script>
	<script src="<?= base_url("asset/dropzone/dropzone.min.js") ?>"></script>
	<script src="<?= base_url("asset/copyreader.js") ?>"></script>
	<script src="<?= base_url("asset/zoom/panzoom.min.js") ?>"></script>
	<script src="<?= base_url("asset/contextmenu/jquery.contextMenu.js") ?>"></script>
	<script src="<?= base_url("asset/signature/js/jquery-ui.min.js") ?>"></script>
	<script src="<?= base_url("asset/signature/js/jquery.signature.js") ?>"></script>
	<script src="<?= base_url("asset/signature/js/jquery.ui.touch-punch.min.js") ?>"></script>
	<script src="<?= base_url("asset/jquery/jquery.redirect.js") ?>"></script>
	<script src="<?= base_url("asset/date-bootstrap/js/bootstrap-datepicker.min.js") ?>"></script>
	<script src="<?= base_url("asset/combotree/comboTreePlugin.js") ?>" type="text/javascript"></script>
	<script src="<?= base_url("asset/freezeTable.js") ?>" type="text/javascript"></script>
	<script src="<?= base_url("asset/emoji/emojionearea.min.js") ?>" type="text/javascript"></script> 
	<!-- <script src="<?= base_url("asset/introjs/introjs.js") ?>" type="text/javascript"></script>  -->
	<!-- GOOGLE JS MAPS, CHART  --> 
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
	<script src="https://www.gstatic.com/charts/loader.js" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVbi4aS-dmQvDoLm97RZcGgeVlwVCcfk0&libraries=places&language=id&region=ID" async defer></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet" />
	<!-- AIzaSyCVbi4aS-dmQvDoLm97RZcGgeVlwVCcfk0
	AIzaSyAW3xZvltquY2OtGjDOqwTq_KaYSo2S77w -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.js"></script>
	<!-- JS SOCKET IO -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.1/socket.io.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>

</head>

<body class="loaded"> 
	<div class="d-flex" id="wrapper">
		<!-- Sidebar-->
		<div class="bg-white" id="sidebar-wrapper">
			<div class="header-sidebar d-flex align-items-center ps-2 py-2" style="height: 4rem; border-bottom: 1px solid #dee2e6; ">
				<img class="px-2" src="<?= base_url("asset/image/obi-erp/logo.png") ?>" alt="icon whatsapp" height="40"> 
				<div class="d-flex flex-column">
					<span class="fw-bold" style="font-size: 1.6rem;padding-bottom: 0;margin-bottom: 0;color: #ff8300;height: 1.8rem;">OBI-ERP</span>
					<span class="fw-bold" style="font-size:0.6rem;color: #ffa600;padding: 2px;">Aplikasi Internal Omahbata</span>
				</div> 
				<button type="button" id="closeToggle" class="close-menu ms-auto btn-close me-2" aria-label="Close"></button>
			</div> 
			<div class="menu">
				<ul class="sidebar-menu user-select-none"></ul>
			</div>
		</div>
		<!-- Page content wrapper-->
		<div id="page-content-wrapper">
			<!-- Top navigation-->   
			<div class="curved-background">
				<div class="curved-background__curved"></div>
			</div> 

			<div class="d-flex text-white p-2 align-items-center navbar" style="font-size:1.2rem;z-index:10;background:#ffa447;">
				<div class="p-1 px-2"> 
					<span id="sidebarToggle"><i class="fas fa-bars"></i></span> 
				</div>
				<div class="flex-fill text-end pe-2">
					<span id="user-notifikasi"><i class="fas fa-bell"></i></span>
					<span id="user-message"><i class="fas fa-envelope"></i></span> 
					<a id="user-profile" class="profile" id="profile-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="rounded-circle border border-2"  src="<?= $_sessionuser['MsEmpImage'] ?>"  width="40" height="40">
					</a> 
					<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" data-bs-popper="none">
						<li><a class="dropdown-item cursor-pointer" data-bs-toggle="modal" data-bs-target="#modal-reset-password">Ganti Password</a></li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li><a href="<?= site_url("login/logout") ?>" class="dropdown-item">Keluar</a></li>
					</ul>
				</div>  
			</div>
 
			<div id="content" class="content">
				<div class="page-load m-2">
				</div>
			</div>
		</div> 
	</div>
	
	<!-- MODAL PASSWORD -->
	<div class="modal fade" id="modal-reset-password" data-bs-keyboard="false" data-bs-backdrop="static">
		<div class="modal-dialog modal-dialog-centered ">
			<form class="modal-content" name="reset-password">
				<div class="modal-header bg-dark">
					<h6 class="modal-title text-white"><i class="fas fa-key text-success" aria-hidden="true"></i> &nbsp;Ganti Password</h5>
						<button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-center">
						<div class="col-11">
							<div class="row mb-1">
								<label for="tb_search" class="col-sm-3 col-form-label">Password Baru</label>
								<div class="col-sm-9">
									<input id="txt-new-password" name="txt-new-password" type="text" class="form-control form-control-sm" value="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				</div>
			</form>
		</div>
	</div>
	<script>
		if ("vwxyzA" == <?= JSON_ENCODE($this->session->userdata("MsEmpPass")) ?>) {
				const swalWithBootstrapButtons = Swal.mixin({
					customClass: {
						confirmButton: 'btn btn-success mx-1',
						cancelButton: 'btn btn-danger mx-1'
					},
					buttonsStyling: false
				});
				swalWithBootstrapButtons.fire({
					icon: 'warning',
					html: 'password anda masih default, silahkan ganti password untuk keamanan data. <span style="font-size:0.75rem;color:orange;"><br>Pesan ini akan tetap muncul jika anda masih menggunakan password default</span>',
					showConfirmButton: true,
					showCancelButton: true,
					allowOutsideClick: false,
					allowOutsideClick: false,
					allowEscapeKey: false,
					confirmButtonText: "Ganti Sekarang",
					cancelButtonText: "Tidak Sekarang",
				}).then((result) => {
					if (result.isConfirmed) {
						$("#modal-reset-password").modal("show");
					}
				});
			}
			$(function() {
				$("form[name='reset-password']").validate({
					rules: {
						"txt-new-password": "required",
					},
					messages: {
						"txt-new-password": "Masukan Password baru",
					},
					submitHandler: function(form) {
						$.each(xhrPool, function(idx, jqXHR) {
							jqXHR.abort();
						});
						$("#btn-submit").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
						$.ajax({
							method: "POST",
							url: "<?= site_url("function/client_data_master/reset_password") ?>",
							data: {
								"MsEmpPass": $("#txt-new-password").val()
							},
							success: function(data) {
								req_status_add = 0;
								$("#btn-submit").html("Simpan");

								if (data) {
									Swal.fire({
										icon: 'success',
										text: 'Ganti password berhasil, Silahkan Login Kembali...!!!',
										showConfirmButton: false,
										allowOutsideClick: false,
										allowEscapeKey: false,
										timer: 1500,
									}).then((result) => {
										if (result.dismiss === Swal.DismissReason.timer) {
											window.location.href = "<?= site_url("login/logout") ?>";
										}
									});
								} else {
									Swal.fire({
										icon: 'error',
										text: 'Ganti password gagal',
										showConfirmButton: false,
										allowOutsideClick: false,
										allowEscapeKey: false,
										timer: 1500
									});
								}
							}
						});
						return false;
					}
				});
			});
	</script>
</body>
	<script> 
	
		Array.prototype.diff = function(a) {
			return this.filter(function(i) {return a.indexOf(i) < 0;});
		};
		number_format = function(number, decimals = 0) {
			dec_point = '.';
			thousands_sep = ',';
			number = number.toFixed(decimals);

			var nstr = number.toString();
			nstr += '';
			x = nstr.split('.');
			x1 = x[0];
			x2 = x.length > 1 ? dec_point + x[1] : '';
			var rgx = /(\d+)(\d{3})/;

			while (rgx.test(x1))
				x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

			return x1 + x2;
		}
		MenuActive = "<?= $_sessionuser['menu_active'] ?>";
		Menuelm = "<?= $_sessionuser['menu_mode'] ?>";
		MenuId = "<?= $_sessionuser['menu_id'] ?>";
		
		var api_map, api_input, api_searchBox, api_markers, api_geocoder;
		var xhrPool = [];
 
		$("#sidebarToggle,#closeToggle").click(function(){
			if($("#sidebar-wrapper").hasClass("close")){
				$("#sidebar-wrapper").removeClass("close");
				$(".treeview-menu.collapse").removeClass("collapse-horizontal"); 
				$('.collapse').collapse('hide');
			}else{ 
				$("#sidebar-wrapper").addClass("close")
				if($(window).innerWidth() >= 769) $(".treeview-menu.collapse").addClass("collapse-horizontal");
				$('.collapse').collapse('hide');
			}
		});
		$.ajax({
			url: "<?= site_url("client/get_side_menu_new") ?>",
			success: function(result) {
				$(".sidebar-menu").html(result);  
				var myGroup = $('.sidebar-menu'); 
				myGroup.on('show.bs.collapse','.collapse', function() {
					myGroup.find('.collapse.show').collapse('hide');
				});
				
				menuselect(MenuId,Menuelm,MenuActive);

				// $( document ).ready(function() {  
				// 	var intro = introJs();
				// 	intro.setOptions({ 
				// 		exitOnOverlayClick: false,
				// 		keyboardNavigation: false,
				// 		showBullets:false,
				// 		hidePrev:true,  
				// 		steps: [{
				// 			element: document.querySelector('#sidebarToggle'),
				// 			title: 'Menu Aplikasi',
				// 			intro: "klik ini untuk membuka dan menutup menu aplikasi!",  
				// 		}, {
				// 			element: document.querySelector('.menu'),
				// 			title: 'Menu Aplikasi',
				// 			intro: "Ini adalah tampilan menu tertutup!",  
				// 		}, {
				// 			element: $("ul.sidebar-menu > li > a.drop")[0],
				// 			title: 'Menu Aplikasi',
				// 			position: 'right',
				// 			intro: "klik ini untuk membuka sub menu",  
				// 		}, {
				// 			element: document.querySelector('#user-notifikasi'),
				// 			title: 'Menu Aplikasi',
				// 			position: 'bottom',
				// 			intro: "klik ini untuk melihat notifikasi",  
				// 		}, {
				// 			element: document.querySelector('#user-message'),
				// 			title: 'Menu Aplikasi',
				// 			position: 'bottom',
				// 			intro: "klik ini untuk melihat pesan masuk",  
				// 		}, {
				// 			element: document.querySelector('#user-profile'),
				// 			title: 'Menu Aplikasi',
				// 			position: 'bottom',
				// 			intro: "klik ini untuk melihat profile anda saat ini",  
				// 		}] 
				// 	});
				// 	function tunggudelay(delay) {
				// 		return new Promise(resolve => {
				// 			setTimeout(() => {
				// 			resolve('resolved');
				// 			}, delay);
				// 		});
				// 	}
				// 	intro.onchange(async function (){  
				// 		if (intro._currentStep == "1") { 
				// 			$("#sidebarToggle").trigger("click");
				// 			const result = await tunggudelay(300);
				// 		}    
						
				// 	}).start();
				// });
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
			}
		});
		 
		menuselect = function(id,menu,submenu){
			var MenuElm;
			$("ul.sidebar-menu li").removeClass("selected"); 
			if(submenu=="-"){ 
				MenuElm=menu; 
			}else{ 
				MenuElm=submenu;
				$('a[name="'+ menu +'"]').parent().addClass("selected"); 
			} 
			$('a[name="'+MenuElm+'"]').parent().addClass("selected");  
			set_page(menu,MenuElm,id)  
		} 
		set_page = function(menu,MenuElm,id){ 
			$.each(xhrPool, function(idx, jqXHR) {
				jqXHR.abort();
			});
			$.ajax({
				url: "<?= site_url("client/get_content/") ?>" + menu + "/" + MenuElm+ "/" + id,
				success: function(result) { 
					$(".page-load").html(result); 
					$('.collapse').collapse('hide'); 
					if($(window).innerWidth() <= 769) { 
						$("#sidebar-wrapper").removeClass("close");
					}
					jQuery(function($) {
						$('#content').on('scroll', function() { 
							$(".curved-background").css({ top: (0 - $(this).scrollTop()) });


							if ($(this).scrollTop()  > 0 ) {
								$(".navbar").css('box-shadow', 'rgb(0 0 0 / 27%) 3px 6px 4px'); 
							}else{
								
								$(".navbar").css('box-shadow', 'none'); 
							}
						});
					});
				}
			}); 
		}


		var startProductBarPos = -1; 
		function scroolfunction() {
			var bar = document.getElementById('side-content');
			if (startProductBarPos < 0) startProductBarPos = findPosY(bar);
			if (pageYOffset > startProductBarPos) {
				bar.style.position = 'fixed';
				bar.style.top = 0;
			} else {
				bar.style.position = 'relative';
			} 
		};

		function findPosY(obj) {
			var curtop = 0;
			if (typeof(obj.offsetParent) != 'undefined' && obj.offsetParent) {
				while (obj.offsetParent) {
					curtop += obj.offsetTop;
					obj = obj.offsetParent;
				}
				curtop += obj.offsetTop;
			} else if (obj.y)
				curtop += obj.y;
			return curtop;
		}

		set_fixed_header = function() {
			window.addEventListener('scroll', scroolfunction);
		}

		function remove_fixed_header() {
			window.removeEventListener('scroll', scroolfunction);
		}
		
		
		
	</script>
</html>
