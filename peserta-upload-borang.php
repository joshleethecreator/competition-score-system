<?php
  # memulakan fungsi session
  session_start();
  # memanggil fail header, guard-hakim dan connection
  include('header.php');
  include('connection.php');
?>

<div class="p-2">
  <form action='peserta-upload-proses.php' method='POST' enctype='multipart/form-data'>
    <h3>Sila Pilih Fail txt yang ingin dimuat naik</h3>
    <input class="form-control" type='file' name='data_peserta'>
    <button class="btn btn-light border border-2 mt-2" type='submit' name='btn-upload'>Muat Naik</button>
  </form>
</div>
<?php include ('footer.php');?>