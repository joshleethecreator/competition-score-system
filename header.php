<?php include('head.html'); ?>

<h1>Pertandingan Pidato Bahasa Cina Peringkat daerah</h1>
<p>Anjuran PPD Sungai Deras</p>
<!--Bahagian Menu Asas.
    Menu terbahagi kepada 3 jenis iaitu
    1. Menu hakim dimana hakim dapat akses semua perkara
    2. Menu peserta dimana peserta hanya boleh memeriksa
    keputusan pertandingan. peserta perlu login.
    3. Menu di laman utama - bagi pelawat yang tidak login

    Anda boleh menambah menu mengikut kehendak anda
-->

<?php
// # Menu Hakim
if (!empty ($_SESSION['tahap']) and $_SESSION['tahap'] == "hakim")
{
echo "
    | <a href='hakim-menu.php'>Menu Hakim</a>
    | <a href='senarai-peserta.php'>Senarai Peserta</a>
    | <a href='peserta-upload-borang.php'>Upload Data Peserta Baharu</a>
    | <a href='senarai-hakim.php'>Senarai Hakim</a>
    | <a href='penilaian-peserta.php'>Penilaian Peserta</a>
    | <a href='keputusan-individu.php'>Keputusan Individu</a>
    | <a href='keputusan-sekolah.php'>Keputusan Sekolah</a>
    | <a href='logout.php'>Logout</a>";
}

// # Menu Peserta
else if (!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "peserta")
{
    echo "
    | <a href='peserta-menu.php'>Menu Peserta</a>
    | <a href='logout.php'>Logout</a>
    | <hr>";

} else {
    // menu Laman Utama
    echo "<a href='index.php'>Laman Utama</a><hr><br>" ;
}
?>