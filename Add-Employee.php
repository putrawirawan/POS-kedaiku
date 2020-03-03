<?php 

require "Process/UserInsert.php";

$Users = new Users();
$rows = $Users->all();
// Menghitung jumlah users
$jumlah = $Users->count();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ==- META SET -== -->

    <title>Add-Employee | KedaiKU</title>
    <!-- ==- TITLE -== -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css'>
    <!-- ===- ADDITIONS -=== -->

    <link rel="icon" type="image/png" href="Dist/Icon/Kedaiku-Icon.png">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="stylesheet" type="text/css" href="Style/sub-style.css">
    <!-- ===- STYLE -=== -->

    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <link rel="https://cdn.rawgit.com/mfd/f3d96ec7f0e8f034cc22ea73b3797b59/raw/856f1dbb8d807aabceb80b6d4f94b464df461b3e/gotham.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- ===- FONTS -=== -->
</head>

<body>

    <div class="left-sidebar">
        <div class="shortcut" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="my-logo">
                <img src="Dist/Icon/Kedaiku-Icon.png" alt="myLogo" height="70">
            </div>
            <div class="menus">

                <div class="item-menu inactive">
                    <a href="AdminDashboard.php">
                        <p class="icon-menu">
                            <i class="fab fa-delicious"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
                    <a href="Data-Employee.php">
                        <p class="icon-menu">
                            <i class="fas fa-users-cog"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="Data-Storage.php">
                        <p class="icon-menu">
                            <i class="fas fa-boxes"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="Data-Sale.php">
                        <p class="icon-menu">
                            <i class="fas fa-money-bill-wave"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="Data-Statistic.php">
                        <p class="icon-menu">
                            <i class="fas fa-chart-pie"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu inactive">
                    <a href="Process/LogOut.php">
                        <p class="icon-menu">
                            <i class="fas fa-power-off"></i>
                        </p>
                    </a>
                </div>

            </div>
        </div>
        <div class="admin-menu" id="sl_ap">
            <div class="admin-pict">
                <img src="Dist/Icon/Admin-pict.png" alt="admin-picture">
            </div>
            <p class="admin-name">
                RadesPratama
            </p>
            <p class="user-role">
                Admin
            </p>
            <ul class="list-menu">
                <a href="AdminDashboard.php">
                    <li>My Dashboard</li>
                </a>
                <a href="Data-Employee.php">
                    <li class="active-link">Employee <span class="badge-kedaiku badge badge-light"><?php echo $jumlah ?></span></li>
                </a>
                <a href="Data-Storage.php">
                    <li>Storage</li>
                </a>
                <a href="Data-Sale.php">
                    <li>Sale</li>
                </a>
                <a href="Data-Statistic.php">
                    <li>Statistic</li>
                </a>
                <a href="Process/LogOut.php">
                    <li style="padding-top:103px;">Log Out</li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="header row">
            <div class="col-md-12">
                <p class="header-title">
                    Add Employee
                </p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="margin-left:32px;background:none">
                        <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="AdminDashboard.php">My Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row report-group">

            <div class="col-md-12">
                <div class="item-big-report col-md-12">

                    <div class="row">
                        <div class="col-4">
                            <div class="wrap-user-picture-circle" style="width: 90px;height: 90px;border-radius: 100%;border: 1px solid #E6E8F0;float: left;">
                                <img class="primary-user-picture-circle" src="Dist/Icon/Admin-pict.png" style="width: 80px;height: 80px;border-radius: 100%;display: block;object-fit: cover;margin: auto;margin-top: 4px;">
                            </div>
                        </div>
                    </div>

                    <div class="form-new-user row" style="margin-top: 10px">
                        <div class="col-md-6">
                            
                            <form method="POST" action="Insert-employee.php">
                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya"   n name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                </div>

                                <div class="form-group content-sign-in">
                                    <label class="title-input-type-primary-tiketsaya" for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control input-type-primary-tiketsaya" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea type="address" name="address" id="address" class="form-control" placeholder=""></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="title-input-type-primary-tiketsaya" for="exampleInputPassword1">Phone</label>
                                            <input type="text" class="form-control input-type-primary-tiketsaya" name="phone" id="exampleInputPassword1" placeholder="Your Phone">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" class="custom-select" id="gender">
                                                    <option selected>...</option>
                                                    <option value="male">Laki-Laki</option>
                                                    <option value="female">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="user_pict">Masukan Foto Kamu</label>
                                                <input type="file" class="form-control-file" name="user_pict" id="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-bottom: -40px; visibility: hidden;" class="form-group content-sign-in">
                                    <input id="image_file" type="file" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Save Now</button>
                                <a href="AdminDashboard.php" style="margin-left: 10px;" class="btn btn-cancel-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ===- CONTENT -=== -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="Style/dark-mode.min.js"></script>
    <!-- =====- JAVASCRIPT INCLUDES -===== -->
</body>

</html>