<?php

include("Process/UserInsert.php");

if (isset($_POST['register'])) {
    $users = new Users();
    $payload = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'address' => $_POST['address'],
        'phone' => $_POST['phone'],
        'gender' => $_POST['gender'],
        'user_pict' => $_FILES['user_pict']['name']
    ];

    $create = $users->create($payload);

    if ($create) header("Location: Login.php");
}

/* ====- INSERT DATA -====*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- === META TAGS === -->

    <title>Daftar Yuk | KedaiKU</title>
    <!-- -=== TITLE ===- -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css'>
    <!-- -=== ADDITIONS ===- -->

    <link rel="icon" type="image/png" href="Dist/Icon/Kedaiku-Icon.png">
    <link rel="stylesheet" type="text/css" href="Style/sign-up.css">
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
            <div class="col-md-6 area_left">
                <div class="d-flex justify-content-center login-container">
                    <form action="" method="POST" class="main-form needs-validation" enctype="multipart/form-data" novalidate>
                        <h1 class="mb-5 font-weight-light text-center">Daftar Dulu <b>KUY</b> <img src="Dist/Icon/Kedaiku-Mbr.png" width="195" height="60" alt="" /></h1>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="...">
                                    <small id="emailHelp" class="form-text text-muted">Masukan Username secara bebas untuk Login kedepannya.</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="email" aria-describedby="inputGroupPrepend" required placeholder="" name="email">
                                <div class="invalid-feedback">
                                    Please enter a valid email.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="margin-left: 405px;margin-top:-38px;border: none;background:none">
                                    <a class="text-area" id="icon-click">
                                        <i class="far fa-eye" id="icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea type="address" name="address" id="address" class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label for="phone">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">+62</span>
                                    </div>
                                    <input type="tel" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" id="phone" aria-describedby="inputGroupPrepend" name="phone" required>
                                    <div class="invalid-feedback">
                                        Masukan Nomor yang Benar!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" class="custom-select">
                                        <option selected>...</option>
                                        <option value="male">Laki-Laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=" row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="user_pict">Masukan Foto Kamu</label>
                                    <input type="file" class="form-control-file" name="user_pict" id="file">
                                </div>
                            </div>
                            <div class="bottom-form">
                                <div class="form-check">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                        <label class="custom-control-label" for="customCheck">Saya menyetujui <a href="syarat&ketentuan.html">syarat</a> dan <a href="syarat&ketentuan.html">ketentuan</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-custom btn-block font-weight-bold" name="register" value="Daftar" style="font-family: Quicksand;font-size: 20px;margin-left: 15px;">Daftar</button>
                                <p class="mt-3 font-weight-normal text-center">
                                    Sudah punya akun? <a href="Login.php"><strong>Masuk Sekarang</strong></a>
                                </p>
                            </div>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 area-right">
                <div class="custom-control custom-switch darkmode">
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
    <!-- ===- CONTENT -==== -->

    <br><br><br><br><br><br><br><br>

    <footer class="footer-area">
        <div class="container">
            <div class="footer-side">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="Dist/Icon/KedaiKU.png" alt="logo" style="width: 150px;height: 40px;" id="logo-kedai"></a>
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
    <!-- ===- FOOTER -=== -->

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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="Js/darkmode-SignUp.min.js"></script>
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