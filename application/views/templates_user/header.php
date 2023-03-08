<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo.png" type="image/ico">
    <title>Lelang Online</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>

<body id="page-top"> 

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">
                
                <img src="<?= base_url('assets/images/barang/lelang.png') ?>" width="150" >

                <?php if ($this->session->userdata('username')) : ?> 
                    
                    <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-1 static-top shadow">
                    <div class=" search-top">
                    <h5 class="brand-logo">
                        <h5 class="text-white"><strong>SELAMAT DATANG</strong></h5>
                    </h5>
                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <div class="search-top">
                    <h5 class="brand-logo">
                        <a href="<?= base_url('history') ?>">
                        <h5 class="text-white"><strong>HISTORI LELANG</strong></h5>
                        </a>
                    </h5>
                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <div class=" search-top">
                    <h5 class="brand-logo">
                        <a href="<?= base_url('auction') ?>">
                        <h5 class="text-white"><strong>BERANDA</strong></h5>
                        </a>
                    </h5>
                    </div>
                </nav>

                <?php else : ?>
                
                <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-1 static-top shadow">
                    <div class=" search-top">
                    <h5 class="brand-logo">
                        <h5 class="text-white"><strong>SELAMAT DATANG</strong></h5>
                    </h5>
                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <div class=" search-top">
                    <h5 class="brand-logo">
                        <a href="<?= base_url('auction') ?>">
                        <h5 class="text-white"><strong>BERANDA</strong></h5>
                        </a>
                    </h5>
                    </div>
                </nav>
                <?php endif; ?>
                
            

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <nav class="navbar navbar-expand navbar-dark bg-warning topbar mb-1 static-top shadow">
                        <!-- Nav Item - User Information -->
                           <?php if ($this->session->userdata('username')) : ?> 
                                <a class="text-white mr-5"><strong><i class="fas fa-fw fa-user"></i><?= $this->session->userdata('username') ?></strong></a>

                                <a class="text-white" onclick="Logout('<?= base_url('auth/logout')?>')">
                                    <strong><i class="fas fa-fw fa-sign-out-alt"></i>KELUAR</strong>
                                </a>

                                <!-- <a href="<?= base_url('auth/logout'); ?>" class="text-white"><strong><i class="fas fa-fw fa-sign-out-alt"></i>KELUAR</strong></a> -->

                            <?php else : ?>
                                <a href="<?= base_url('auth/login'); ?>" class="text-white mr-5"><strong>
                                <i class="fas fa-fw fa-sign-in-alt"></i>
                                MASUK</strong</a>
                                <a href="<?= base_url('auth/register'); ?>" class="text-white"><strong><i class="fas fa-fw fa-user-plus"></i> DAFTAR</strong>
                               </a>
                            <?php endif; ?>
                        </nav>
                        </ul>
        </nav>

       