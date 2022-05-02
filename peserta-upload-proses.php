<?php
if (isset($_POST['btn-upload'])) {
  # memanggil fail connection
  include ('connection.php');

  # mengambil nama sementara fail
  $namafailsementara=$_FILES["data_peserta"]["tmp_name"];

  # mengambil nama fail
  $namafail=$_FILES['data_peserta']['name'];

  # mengambil jenis fail
  $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);

  # menguji jenis fail dan sail fail
  if ($_FILES["data_peserta"]["size"]>0 AND $jenisfail=="txt") {
    # membuka fail yang diambil
    $fail_data_peserta=fopen($namafailsementara,"r");

    # mendapatkan data dari fail baris demi baris
    while (!feof($fail_data_peserta)) {
      #mengambil data sebaris sahaja bagi setiap pusingan
      $ambilbarisdata = fgets($fail_data_peserta);

      # memecahkan baris data mengikut tanda pipe
      $pecahkanbaris = explode("|",$ambilbarisdata);

      # selepas pecahan tadi akan diumpukan kepada 3
      list($nokp,$nama,$sekolah,$katalaluan,$nokp_hakim) = $pecahkanbaris;

      #arahan SQL untuk menyimpan data
      $arahan_sql_simpan=
      "INSERT INTO `peserta` 
        (`nokp_peserta`, `nama_peserta`, `katalaluan_peserta`, `kod_sekolah`, `nokp_hakim`, `mata`) 
      VALUES 
        ('$nokp', '$nama', '$katalaluan', '$sekolah', '$nokp_hakim', 0);";

      # memasukkan data ke dalam jadual peserta
      $laksana_arahan_simpan = mysqli_query($condb, $arahan_sql_simpan);
      echo"<script>alert('import fail Data Selesai');
      window.location.href='senarai-peserta.php'; </script>";
    }

    fclose($fail_data_peserta);

  }else {
    echo"<script>alert('hanya fail berformat txt sahaja dibenarkan');
    window.location.href='peserta-upload-borang.php';</script>";
  }
}
else 
{
  die ("<script>alert('Ralat! akses secara terus');
  window.location.href='peserta-upload-borang.php';</script>");
}