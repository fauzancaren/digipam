<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">   
	<link href="<?= base_url("asset/fontawesome5/css/all.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/bootstrap-5.2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">  
	<link href="<?= base_url("asset/datatable/datatables.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css"> 
	<link href="<?= base_url("asset/select2/css/select2.min.css") ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url("asset/datepicker/daterangepicker.css") ?>" rel="stylesheet" type="text/css">



<script src="<?= base_url("asset/bootstrap-5.2/js/bootstrap.bundle.min.js") ?>"></script>
	<script src="<?= base_url("asset/jquery/jquery-3.6.0.min.js") ?>"></script>
	<script src="<?= base_url("asset/datatable/datatables.min.js") ?>"></script>
	<script src="<?= base_url("asset/datatable/rowgroup.js") ?>"></script>
	<script src="<?= base_url("asset/cleave/cleave.min.js") ?>"></script>
	<script src="<?= base_url("asset/cleave/cleave-phone.id.js") ?>"></script>
    <script src="<?= base_url("asset/sweetalert/dist/sweetalert2.all.min.js") ?>"></script> 
	<script src="<?= base_url("asset/select2/js/select2.full.min.js") ?>"></script> 
	<script src="<?= base_url("asset/jquery/jquery.moment.min.js") ?>"></script>
	<script src="<?= base_url("asset/datepicker/daterangepicker.js") ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet" />
	<!-- AIzaSyCVbi4aS-dmQvDoLm97RZcGgeVlwVCcfk0AIzaSyAW3xZvltquY2OtGjDOqwTq_KaYSo2S77w -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.js"></script>
	
    <link rel="stylesheet" href="<?= base_url("asset/mainmenu3.css")?>">
    
    <title>Dashboard | DIGIPAM</title>
</head>

<body class="<?= ($_sessionuser["dark_mode"] == "true" ? "dark-mode-variables" : "") ?>"> 
    <div class="home-body">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="<?= base_url("asset/image/logo/logo1.png")?>">
                    <h2>DIGI<span class="primary">PAM</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="<?= base_url()?>" class="<?= $_menu == "Dashboard" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>

                <!-- Master Data -->
                <span class="head-menu"> 
                    <h3>Layanan </h3>
                </span>
                <a href="<?= base_url("client/pengaduan")?>" class="<?= $_menu == "Pengaduan" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        payments
                    </span>
                    <h3>Pengaduan</h3>
                </a>
                
                <!-- <a href="<?= base_url("client/tarif")?>" class="<?= $_menu == "Tarif" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        payments
                    </span>
                    <h3>Tarif</h3>
                </a> -->

                <!-- Transaksi -->
                <span class="head-menu"> 
                    <h3>Transaksi</h3>
                </span>
                <a href="<?= base_url("client/pembayaran")?>" class="<?= $_menu == "Pembayaran" ? "active" : "" ?>">
                    <span class="material-icons-sharp">
                        assignment_turned_in
                    </span>
                    <h3>Pembayaran</h3>
                </a>


                <a href="<?= base_url("login/logout")?>">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <?= $_content ?>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?= $_sessionuser["username"] ?></b></p>
                        <small class="text-muted"><?= $_sessionuser["login_mode"] ?></small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?= base_url("asset/image/user.png")?>">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->
 

            <div class="reminders">
                <div class="header">
                    <h2>Info Terbaru</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Tidak Ada Info Terbaru</h3> 
                        </div> 
                    </div>
                </div>

                <div class="notification deactive d-none">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder  d-none">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="<?= base_url("asset/orders.js")?>"></script>
    <script>
        console.log("<?= $_sessionuser["dark_mode"]?>")
        const sideMenu = document.querySelector('aside');
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');

        const darkMode = document.querySelector('.dark-mode');

        menuBtn.addEventListener('click', () => {
            sideMenu.style.display = 'block';
        });

        closeBtn.addEventListener('click', () => {
            sideMenu.style.display = 'none';
        });

        darkMode.addEventListener('click', () => {
            var toggle = document.body.classList.toggle('dark-mode-variables'); 
            $.get("<?= base_url("client/set_darkmode/")?>" + toggle, function (result) {
                console.log(result);
            })
            darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
            darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
        })
    </script>
</body>

</html>