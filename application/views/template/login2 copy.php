<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
    <title>Login Aplikasi | Pamsimas</title>
    <script src="<?= base_url('asset/jquery/jquery-3.6.0.min.js') ?>"></script> 
	<script src="<?= base_url("asset/sweetalert/dist/sweetalert2.all.min.js") ?>"></script> 
	<link href="<?= base_url("asset/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css"> 
    <script src="https://kit.fontawesome.com/36f07a24cf.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body{
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .container{
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            min-height: 480px;
        }

        .container p{
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .container span{
            font-size: 12px;
        }

        .container a{
            color: #333;
            font-size: 13px;
            text-decoration: none;
            margin: 15px 0 10px;
        }

        .container button{
            background-color: #512da8;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
        }

        .container button.hidden{
            background-color: transparent;
            border-color: #fff;
        }

        .container .form-body{
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }
        .d-flex{
            padding-top: 10px;
            display: flex;
            width: 100%; 
            flex-direction: row;
            justify-content: space-between!important;
        }
        .container input{
            background-color: #eee;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .form-container{
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in{
            left: 0;
            width: 95%;
            z-index: 2;
        }

        .container.active .sign-in{
            transform: translateX(100%);
        }

        .sign-up{
            left: 5%;
            width: 95%;
            opacity: 0;
            z-index: 1;
        }

        .container.active .sign-up{

            opacity: 1;
            z-index: 5;
            animation: move 0.6s;
        }

        @keyframes move{
            0%, 49.99%{
                opacity: 0;
                z-index: 1;
            }
            50%, 100%{
                opacity: 1;
                z-index: 5;
            }
        }

        .social-icons{
            margin: 20px 0;
        }

        .social-icons a{
            border: 1px solid #ccc;
            border-radius: 20%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 3px;
            width: 40px;
            height: 40px;
        }

        .toggle-container{
            position: absolute;
            top: 0;
            left: 95%;
            width: 5%;
            height: 100%;
            overflow: hidden;
            /* transition: all 0.6s ease-in-out; */
            border-radius: 150px 0 0 100px;
            z-index: 1000;
            animation: moving 1s both; 
        }

        @keyframes moving{
            0%   { left:0%; width:5%;} 
            25%  { left:0%; width:100%;}
            100% { left:95%; width:5%;} 
        }
        .container.active .toggle-container{ 
            border-radius: 0 150px 100px 0;
            animation: moveactive 1s both; 
            
        }

        @keyframes moveactive{
            0%   { left:95%; width:5%;} 
            25%  { left:0%; width:100%;}
            100% { left:0%; width:5%;} 
        }

        .toggle{
            background-color: #512da8;
            height: 100%;
            background: linear-gradient(to right, #5c6bc0, #512da8);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            /* transform: translateX(0);
            transition: all 0.6s ease-in-out; */
        }

        .container.active .toggle{
            transform: translateX(50%);
        }

        .toggle-panel{
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }
        .pointer{
            cursor: pointer;
        }
        .d-none{
            display: none;
        }
        /* 
        .toggle-left{
            transform: translateX(-200%);
        }

        .container.active .toggle-left{
            transform: translateX(0);
        }

        .toggle-right{
            right: 0;
            transform: translateX(0);
        }

        .container.active .toggle-right{
            transform: translateX(200%);
        } */
    </style>
</head>

<body> 
    <div class="container" id="container">
        <div class="form-container sign-up">
            <div class="form-body">
                <h1>Buat Akun Baru</h1>
                <span>dengan</span>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a> 
                </div>
                <span>atau gunakan email untuk registrasi</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Sign Up</button>
                
                <div class="d-flex">
                    <a>sudah punya account?</a>
                    <a class="pointer" id="login">Sign In</a>
                </div> 
            </div>
        </div>
        <div class="form-container sign-in">
            <div class="form-body">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a> 
                </div>
                <span>atau gunakan user dan password</span>
                <span style="padding-top:10px;color: red;" id="message-username"></span>
                <input type="text" placeholder="user" id="userlogin">
                <span style="padding-top:10px;color: red;" id="message-password"></span>
                <input type="password" placeholder="Password" id="passlogin">
                <button id="submit-login">Sign In</button>
                <div class="d-flex">
                    <a class="pointer" href="#">Lupa Password?</a>
                    <a class="pointer d-none" id="register">Sign Up</a>
                </div>
               
            </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                   
                </div>
                <div class="toggle-panel toggle-right">
                   
                </div>
            </div>
        </div>
    </div>
    <br>
    <span style="font-size: 0.85rem;color: #002fff;">—— © Support By : FAUZANCAREN ——</span>
    <script >

        $("#username").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#password").focus();
            }
        });
        $("#password").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#submit").click();
            }
        });
        $('#submit').on('click', function() {  
            $(this).html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('login/check') ?>",
                data: {
                    'MsEmpCode': $("#username").val(),
                    'MsEmpPass': $("#password").val()
                },
                success: function(data) {
                    $("#message-username").html(data.username);
                    $("#message-password").html(data.password);
                    $("#submit").html('Submit');
                    if (data.status == 'Success') {
                        Swal.fire({
                            showClass: {
                                popup: 'animate__animated animate__zoomInUp', 
                            }, 
                            hideClass: {
                                popup: 'animate__animated fadeOutUp animate__zoomOutDown',
                            },
                            icon: 'success',
                            title: 'Login Success',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.replace('<?= base_url(); ?>');
                            }
                        })

                    } else { 
                        Swal.fire({
                            icon: 'error',
                            title: 'Login failed',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }
            });
        })
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });

        $("#userlogin").keyup(function(event) {
            $("#message-username").html("");
            if (event.keyCode === 13) {
                $("#passlogin").focus();
            }
        });
        $("#passlogin").keyup(function(event) {
            $("#message-password").html("");
            if (event.keyCode === 13) {
                $("#submit-login").click();
            }
        });
        $('#submit-login').on('click', function() {  
            if( $("#userlogin").val() == "") {
                $("#message-username").html("username tidak boleh kosong");
                return false;
            }
            if( $("#passlogin").val() == "") {
                $("#message-password").html("password tidak boleh kosong");
                return false;
            }
            $(this).html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('login/check') ?>",
                data: {
                    'username': $("#userlogin").val(),
                    'password': $("#passlogin").val()
                },
                success: function(data) {
                    $("#message-username").html(data.username);
                    $("#message-password").html(data.password);
                    $("#submit-login").html('Sign In');
                    if (data.status == 'Success') {
                        Swal.fire({
                            showClass: {
                                popup: 'animate__animated animate__zoomInUp', 
                            }, 
                            hideClass: {
                                popup: 'animate__animated fadeOutUp animate__zoomOutDown',
                            },
                            icon: 'success',
                            title: 'Login Success',
                            showConfirmButton: false,
                            timer: 1500,
                        }).then((result) => {
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.replace('<?= base_url(); ?>');
                            }
                        })

                    } else { 
                        Swal.fire({
                            icon: 'error',
                            title: 'Login failed',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }
            });
        })
    </script>
</body>

</html>