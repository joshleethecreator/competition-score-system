<?php
#Memulakan fungsi session
Session_start();

#menyemak kewujudan data POST
if (!empty($_POST))
{
      # Jika data POST wujud

      #panggil fail connection.php
      include ('connection.php');

      # Data Validation : Had Atas & had bawah
      if(strlen($_POST['nokp']) != 12 or !is_numeric($_POST['nokp']))
      {
        die("<script>alert('Ralat Pada No Kad Pengenalan');
        window.location.href='peserta-signup-borang.php';</script>");
      }

      $nokp = $_POST['nokp'];
      $nama = $_POST['nama'];
      $katalaluan = $_POST['katalaluan'];
      $sekolah = $_POST['kod_sekolah'];

      # Arahan (Query) untuk menyimpan data Peserta baru
      $query_login = "INSERT INTO `peserta` 
      (`nokp_peserta`, `nama_peserta`, `katalaluan_peserta`, `kod_sekolah`, `nokp_hakim`, `mata`) 
      VALUES 
      ('$nokp', '$nama', '$katalaluan', '$sekolah', 1, 0);";

      // Melaksanakan Arahan Menyimpan data Peserta baru
      $laksana_query = mysqli_query($condb, $query_login);

      # Menyemak proses penyimpanan data
      if($laksana_query)
     {
        # jika data berjaya disimpan
        die("<script>alert ('Pendaftaran Berjaya. Sila login untuk melihat keputusan');
        window.location.href='index.php';</script>");
      }
      else
      {
        # jika data gagal disimpan
        die("<script>alert ('Pendaftaran Gagal');
        window.location.href='peserta-signup-borang.php';</script>");
      }
}
else
{
      # jika data POST tidak wujud (empty)
      die("<script>alert ('sila lengkap maklumat berikut');
      window.location.href='peserta-signup-borang.php';</script>");
}
?>