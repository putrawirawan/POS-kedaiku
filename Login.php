<?php

session_start();
    if (isset($_SESSION['role'])) {
        if($_SESSION['role']=="Employee"){
            echo "ini halaman employee";
        }elseif($_SESSION['role']=="Admin"){
        header("Location: AdminDashboard.php");

        }

    } 


require_once("Process/Cek-Login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- === META TAGS === -->

    <title>Selamat Datang | KedaiKU</title>
    <!-- -=== TITLE ===- -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
    <!-- -=== ADDITIONS ===- -->

    <link rel="icon" type="image/png" href="Dist/Icon/Kedaiku-Icon.png">
    <link rel="stylesheet" type="text/css" href="Style/login.css">
    <!-- -=== LINK STYLE ===- -->

    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- -=== FONTS ===- -->
</head>

<body>
    <div class="container-fluid">
        <div class="row working-area">
            <div class="col-lg-6 area-left">
                <div class="d-flex justify-content-center align-items-center login-container">
                    <form class="login-form text-center" action="" method="POST">
                        <h1 class="mb-5 font-weight-light">Selamat Datang <img src="Dist/Icon/Kedaiku-Mbr.png" width="195" height="60" alt="" /></h1>

                        <?php if (isset($error)) : ?>

                            <p style="color: red; font-style: italic;">Data yang kamu masukan salah!</p>

                        <?php endif ?>

                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control rounded-pill form-control-lg" placeholder="Username" style="font-family: Quicksand">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control rounded-pill form-control-lg" placeholder="Password" style="font-family: Quicksand">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="margin-left: 290px;margin-top:-48px;border: none;background:none">
                                    <a class="text-area" id="icon-click">
                                        <i class="far fa-eye" id="icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="forgot-link form-group d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck" style="font-size: 13px; padding-top:3px">Ingat Kata Sandi</label>
                                </div>
                            </div>
                            <a href="#">Tidak ingat kata sandi?</a>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-sm rounded-pill btn-custom btn-block font-weight-bold myBtn" style="font-family: Quicksand;font-size: 20px;">Masuk</button>
                        <p class="mt-3 font-weight-normal">
                            Belum punya akun? <a href="Sign-Up.php"><strong>Daftar Sekarang</strong></a>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 area-right">
                <div class="custom-control custom-switch dark-switch notranslate">
                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                    <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                </div>
                <div id="carouselExampleIndicators" class="my-slider carousel slide picture-img" data-ride="carousel" data-interval="1800">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Dist/BG/Art_1.png" class="d-block w-100" alt="Pict Iconic 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Dist/BG/Art_2.png" class="d-block w-100" alt="Pict Iconic 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Dist/BG/Art_3.png" class="d-block w-100" alt="Pict Iconic 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -======= LOGIN FORM =======- -->
    <br><br><br><br><br><br>

    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="Dist/Icon/KedaiKU.png" alt="logo" style="width: 150px;height: 40px;"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <a href="https://id-id.facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/?hl=id"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://twitter.com/twitter"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2020 All rights reserved KEDAIKU
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- -======= FOOTER =======- -->

    <!-- -======= JAVACRIPT =======- -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/1d8f554057.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js" integrity="sha256-7OUNnq6tbF4510dkZHCRccvQfRlV3lPpBTJEljINxao=" crossorigin="anonymous"></script>
    <script src="Js/darkmode-Login.min.js"></script>
    <!-- ====- Hide/Show BTN -==== -->
    <script type="text/javascript">
        $(document).ready(function() {

            $("#icon-click").click(function() {
                $("#icon").toggleClass('fa-eye-slash');

                var input = $("#password");
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });

        });
    </script>
</body>

</html>