<?php
  # memulakan fungsi session
  session_start();
  # menyemak kewujudan data GET nokp peserta
  if(!empty($_GET)){
    include('connection.php');

    $arahan = "DELETE FROM `peserta` WHERE `nokp_peserta` = '".$_GET['nokp']."';";
    # melaksanakan arahan dan menguji proses padam rekod
    if (mysqli_query($condb, $arahan))
    {
      #jika data berjaya dipadam
      echo "<script>alert('Padam data Berjaya');
      window.location.href='senarai-peserta.php';</script>";
    }
    else
    {
      # jika data gagal dipadam
      echo "<script>alert('Padam data gagal');
      window.history.back();</script>";
      # jika data GET tidak wujud (empty)
      die("<script>alert('Ralat! akses secara terus');
      window.location.href='senarai-peserta.php';</script>");
    }
  }
  else {
    die("<script>alert('Padam data Berjaya');
    window.location.href='senarai-peserta.php';</script>");
  }