<?php 

    $ip  = $this->input->ip_address(); // Mendapatkan IP user

    $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
    $waktu = time(); //\
    $timeinsert = date("Y-m-d H:i:s");

    // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
$s = $this->db->query("SELECT * FROM tbl_visitor WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
$ss = isset($s)?($s):0;

//kalau belum ada simpan data ip
if($ss == 0){
$this->db->query("INSERT INTO tbl_visitor(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
}

// Jika sudah ada, update
else{
$this->db->query("UPDATE tbl_visitor SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");
}
        
 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ebunga</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    
        <!-- bootstrap css  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
            <!-- skeleton source  -->
        <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?= base_url('assets/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?= base_url('assets/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/') ?>css/style.css?v=1.0" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>loading/style.css?v2">




        <!-- link slide img -->
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/slide_img/') ?>light-carousel.css" rel="stylesheet" type="text/css">

        
    </head>

    


    <style>
       

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
    </style>

    <body style="background:#e2e8f0">
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>ebunga@gmail.com</h2>
                               
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+6282167511111</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <!-- <a href=""><i class="fab fa-twitter"></i></a> -->
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand"><img src="<?= base_url("assets/logo/ebunga.png") ?>" style="height: 800px;"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <!-- <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="price.html" class="nav-item nav-link">Price</a>
                        <a href="class.html" class="nav-item nav-link">Class</a>
                        <a href="team.html" class="nav-item nav-link">Trainer</a>
                        <a href="portfolio.html" class="nav-item nav-link">Pose</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div> -->
                        <a href="<?= base_url('registrasi/') ?>" class="nav-item nav-link">Register</a>
                        <a href="<?= base_url('login/') ?>" class="nav-item nav-link">Login</a>

                    </div>
                </div>
            </div>
        </div>