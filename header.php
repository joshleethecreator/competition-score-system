<?php include('head.html'); ?>
<div class="container-fluid bg-success"><img style="margin: 10px 0 ;padding-left: 370px ;height: 200px; width: 75%;" src="./images/header-banner.jpg" alt="header-img"></div>
<header class="bg-info text-white container-fluid">
   
    <div class="container-fluid p-3 ">
        <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-start">
            <!-- hakim header -->
            <?php if (!empty ($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim") { ?>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="hakim-menu.php" class="nav-link px-2 text-white">Menu Hakim</a></li>
                    <li><a href="senarai-peserta.php" class="nav-link px-2 text-white">Senarai Peserta</a></li>
                    <li><a href="peserta-upload-borang.php" class="nav-link px-2 text-white">Upload Data Peserta Baharu</a></li>
                    <li><a href="senarai-hakim.php" class="nav-link px-2 text-white">Senarai Hakim</a></li>
                    <li><a href="penilaian-peserta.php" class="nav-link px-2 text-white">Penilaian Peserta</a></li>
                    <li><a href="keputusan-individu.php" class="nav-link px-2 text-white">Keputusan Individu</a></li>
                    <li><a href="keputusan-sekolah.php" class="nav-link px-2 text-white">Keputusan Sekolah</a></li>
                    <li><a href="logout.php" class="nav-link px-2 text-white">Logout</a></li>
                </ul>
            <!-- peserta header -->
            <?php } else if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta") { ?> 
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link px-2 text-white" href='peserta-menu.php'>Menu Peserta</a></li>   
                    <li><a class="nav-link px-2 text-white" href='logout.php'>Logout</a></li>
                </ul>
            <?php } else { ?>
                <!-- Home -->
                <a href="index.php"><i class="bi bi-house-door-fill text-white text-start fs-4"></i></a>

                
                <div class="text-end">
                    <a href="peserta-login-borang.php" class="btn btn-outline-light me-2">Login</a>
                    <a href="peserta-signup-borang.php" class="btn btn-warning">Sign-up</a>
                </div>
            <?php } ?>
        </div>
    </div>
</header>