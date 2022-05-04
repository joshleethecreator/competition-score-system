<?php 
# Memulakan fungsi SESSION
session_start();

# Memanggil fail header.php dan fail fungsi.php
include('header.php'); 
include ('fungsi.php');
?>
<div class="container-fluid bg-danger position-relative">
    <img 
        class="mx-auto d-block"
        src="https://www.languagecouncils.sg/mandarin/ch/-/media/smc/images/homepage/banner1.ashx?as=1&mw=1100"
        alt="hero-img"
    >

    <!-- floating hero text -->
    <h1 class="position-absolute bottom-0 start-0" 
        style="font-family: 'Permanent Marker', cursive;"
    >
        Pertandingan Pidato Bahasa Cina Peringkat daerah
    </h1>
    <!-- <p>PPD Sungai Deras</p> -->
</div>

<section class="bg-light p-3">
    <div class="container-lg">
        <div class="row justify-content-evenly align-items-center">
            <!-- lists -->
            <div class="list-group col-4">
                <div class="list-group-item py-3 bg-success">
                    <h4 class="mb-1 text-white">Sila Pilih:</h4> 
                </div>
                <div class="list-group-item py-3 list-group-item-action">
                    <b class="mb-1"><a class="text-decoration-none fw-bold" href='peserta-signup-borang.php'>Daftar Peserta Baharu</a></b> 
                </div>
                <div class="list-group-item py-3 list-group-item-action">
                    <b class="mb-1"><a class="text-decoration-none fw-bold" href='peserta-login-borang.php'>Login Peserta</a></b> 
                </div>
                <div class="list-group-item py-3 list-group-item-action">
                    <b class="mb-1"><a class="text-decoration-none fw-bold" href='hakim-login-borang.php'>Login Hakim</a></b> 
                </div>
            </div>
            <!-- img -->
            <div class="col-6 mh-100">
                <img class="img-fluid rounded-circle border border-5" src="https://www.languagecouncils.sg/mandarin/ch/-/media/smc/images/homepage/discover-more2.ashx?la=zh-sg" alt="lion img">
            </div>
        </div>
    </div>
</section>
<!-- Memaparkan Syarat-Syarat Pertandingan -->
<section>
    <h2 class="text-center bg-success py-2">Terma & Syarat Pertanding</h2>

    <div class="container-lg">
        <div class="row justify-content-evenly">
            <div class="col-6">
                <div class="card">
                    <div class="card-body py-4">
                        <h4 class="card-title
                        ">Kategori Individu</h4>
                        <li class="card-text">Terbuka kepada semua warganegara Malaysia berumur 10 tahun ke bawah</li>
                        <li class="card-text">Setiap Peserta hanya boleh menghantar SATU(1) penyertaan sahaja</li>
                        <li class="card-text">Durasi Video tidak melebihi 10 minit</li>
                        <li class="card-text">Muat naik video anda ke youtube dan masukkan link tersebut semasa pendaftaran</li>
                        <li class="card-text">Tarikh tutup penyertaan pada 30 September 2021 12.00 tengah malam</li>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body py-4">
                        <h4 class="card-title">Kategori Sekolah</h4>
                        <li class="card-text">Tiada had penyertaan yang boleh dihantar bagi mewakili sekolah</li>
                        <li class="card-text">Setiap mata peserta akan ditambah kepada markah komulatif sekolah</li>
                        <li class="card-text">Sekolah yang berjaya mengumpul markah komulatif tertinggi akan dinobatkan sebagai johan</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light mt-4 p-3">
<hr>
    <h2>Keputusan Individu</h2>
    <?PHP
    # Memanggil fungsi semak() dari fail fungsi.php
    $k=semak();

    # Semakan Nilai yang dipulangkan
    if($k=="Semua peserta telah dinilai.")
    {
        //  jika nilai dipulangkan Semua peserta telah dinilai.
        //  panggi fungsi keputusan individu dari fail fungsi 
        //  dan papar keputusan 5 individu terbaik. 
        //  Bilangan pemenang anda boleh ubah di fail fungsi.php
        keputusan_individu();
    }
    else
    { ?>   
        <p>Proses Penilaian masih dibuat</p>
    <?php } ?>

    <hr>

    <h2>Keputusan Sekolah</h2>
    <?PHP
        # Memanggil fungsi semak() dari fail fungsi.php
        $k=semak();
        if($k=="Semua peserta telah dinilai.")
        {
            # jika nilai dipulangkan Semua peserta telah dinilai.
            # panggi fungsi keputusan sekolah dari fail fungsi 
            # dan paparkan keputusan keseluruhan sekolah
            keputusan_sekolah();
        }
        else
        {
            # paparan jika proses penilaian masih belum tamat
            echo "<p>Proses Penilaian masih dibuat</p>";
        }
    ?>
</section>



<?php include ('footer.php'); ?>