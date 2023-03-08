<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- bg-gradient-danger -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <img src="<?= base_url("assets/images/barang/lelang.png") ?>" width="100" alt="logo">
                <!-- <div class="sidebar-brand-text mx-3">LELANG.RI</div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>Dashboard
                </a>
            </li>
            
            
            <hr class="sidebar-divider my-0">
             <!-- Heading -->
             <div class="sidebar-heading ">
                 Data Pengguna
            </div>
                <!-- Nav Item - Data Admin -->
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/data_admin'); ?>">
                    <i class="fas fa-fw fa-users"></i>Data Operator
                    </a>
                </li>
                <!-- Nav Item - Data Barang -->
                <li class="nav-item ">
                    <a class="nav-link" href="<?= base_url('admin/Data_pengguna'); ?>">
                    <i class="fas fa-fw fa-user-secret"></i>Data Pengguna
                    </a>
                </li>

                <hr class="sidebar-divider my-0">
                 <!-- Heading -->
                 <div class="sidebar-heading ">
                     Data Barang
                    </div>
                    
                    <!-- Nav Item - Data Barang -->
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('admin/Data_barang'); ?>">
                            <i class="fas fa-fw fa-table"></i>Data Barang
                        </a>
                    </li>
                    <!-- Nav Item - Data Lelang -->
                    <!-- <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('admin/Data_lelang'); ?>">
                            <i class="fas fa-fw fa-database"></i>Data Lelang
                        </a>
                    </li> -->
                    <!-- Nav Item - Data Lelang -->
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('admin/Data_lelang/pemenang'); ?>">
                        <i class="fas fa-fw fa-chess-king"></i>Data Pemenang
                        </a>
                    </li>

                    <hr class="sidebar-divider my-0">
                    <!-- Heading -->
                    <div class="sidebar-heading ">
                         Data Laporan
                        </div>
                        <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin/laporan'); ?>">
                    <i class="fas fa-fw fa-folder"></i>Laporan
                </a>
            </li>
            
            <hr class="sidebar-divider my-0">


            <!-- Nav Item -logout -->
            <li class="nav-item ">
            <a class="nav-link" onclick="Logout('<?= base_url('auth/logout')?>')">
                    <i class="fas fa-fw fa-sign-out-alt"></i>Keluar
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
               
                        <ul class="na navbar-nav navbar-right">
                            <div class="text-primary"><i class="fas fa-fw fa-user"></i><?= $this->session->userdata('nama_petugas') ?> | admin</div>

                        </ul>

                    </ul>
                </nav>


                
            