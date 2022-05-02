<?php 
# memulakan fail session
session_start();

# memanggil fail header.php dan guard-hakim.php
include('header.php');
include('guard-hakim.php');
?>

<!-- Memaparkan nama hakim -->
<p>Selamat datang <?= $_SESSION['nama'] ?></p>

<!-- Memaparkan tugas-tugas sebagai hakim pertandingan -->
<p>Tugas Hakim</p>
<ol>
    <li>Setiap hakim boleh mendaftar peserta baharu dengan cara memuat naik data *txt peserta.</li>
    <li>Setiap hakim boleh menilai mana-mana peserta yang telah disenaraikan.</li>
    <li>Peserta terakhir akan dinilai dan diberikan markah pada hari terakhir pertandingan.</li>
</ol>

<?php include ('footer.php'); ?>
