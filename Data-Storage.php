<?php 

require "Process/UserInsert.php";
$Users = new Users();
$jumlah = $Users->count();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ==- META SET -== -->

    <title>Data-Storage | KedaiKU</title>
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

                <div class="item-menu inactive">
                    <a href="Data-Employee.php">
                        <p class="icon-menu">
                            <i class="fas fa-users-cog"></i>
                        </p>
                    </a>
                </div>

                <div class="item-menu">
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
                    <li>Employee <span class="badge-kedaiku badge badge-light"><?php echo $jumlah ?></span></li>
                </a>
                <a href="Data-Storage.php">
                    <li class="active-link">Storage</li>
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
                    Storage Dashboard
                </p>
                <p class="sub-header-title">
                    Latest report updated this week and on
                </p>
            </div>
        </div>
        <div class="row report-group">
            <div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="Dist/Icon/burger.svg" height="40" alt="">
                            <p class="title-items">
                                Food Received
                            </p>
                            <p class="subtitle-items">
                                RAW FOOD MANAGE
                            </p>
                            <p class="value-items">
                                23
                            </p>
                            <p class="desc-items">
                                Pcs
                            </p>
                            <a href="#" type="button" class="btn-desc btn btn-outline-info btn-xs" style="float: right;margin-top:-105px"><i class="fas fa-info"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="Dist/Icon/water.svg" height="40" alt="">
                            <p class="title-items">
                                All Drink Received
                            </p>
                            <p class="subtitle-items">
                                DRINK MANAGE
                            </p>
                            <p class="value-items">
                                48
                            </p>
                            <p class="desc-items">
                                Pcs
                            </p>
                            <a href="#" type="button" class="btn-desc btn btn-outline-info btn-xs" style="float: right;margin-top:-105px"><i class="fas fa-info"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="Dist/Icon/orange.svg" height="40" alt="">
                            <p class="title-items">
                                Fruits Received
                            </p>
                            <p class="subtitle-items">
                                FRESH FRUITS MANAGE
                            </p>
                            <p class="value-items">
                                20
                            </p>
                            <p class="desc-items">
                                Pcs
                            </p>
                            <a href="#" type="button" class="btn-desc btn btn-outline-info btn-xs" style="float: right;margin-top:-105px"><i class="fas fa-info"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row report-group">
            <div class="col-md-6">
                <div class="col-md-12 items-big-report">
                    <p class="title">
                        <span class="title-blue">NEWEST</span> ITEMS RECEIVED
                    </p>
                    <p class="sub-title">
                        MANAGE THAT ITEMS IN STORAGE
                    </p>
                    <a href="List-Storage.php" class="btn btn-small btn-primary" style="width: 95px;height:35px;font-size:12px;margin:0;float:right;margin-top:-45px;box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1)">See More</a>
                    <div class="divider-line"></div>
                    <div class="list-item">
                        <p class="item-received">
                            Dragon Fruit
                        </p>
                        <a href="#" type="button" class="btn btn-outline-info" style="width: 75px;height:25px;font-size:10px;float:right;margin-top:-40px">Info More</a>
                    </div>
                    <div class="list-item">
                        <p class="item-received">
                            Salad
                        </p>
                        <a href="#" type="button" class="btn btn-outline-info" style="width: 75px;height:25px;font-size:10px;float:right;margin-top:-40px">Info More</a>
                    </div>
                    <div class="list-item">
                        <p class="item-received">
                            Beef Meat
                        </p>
                        <a href="#" type="button" class="btn btn-outline-info" style="width: 75px;height:25px;font-size:10px;float:right;margin-top:-40px">Info More</a>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 30px">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="Dist/Icon/food-add.svg" height="40" alt="">
                            <p class="title-items">
                                Add-Food
                            </p>
                            <p class="subtitle-items">
                                MANUALLY FOOD ADD
                            </p>
                            <a href="Add-Food.php" style="margin-top: -40px;float:right;" type="button" class="btn btn-outline-primary"><i class="fas fa-plus"></i> Food</a>
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