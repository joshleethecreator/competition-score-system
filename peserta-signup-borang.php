<?php
  # Memulakan fungsi session
  session_start();
  #memanggil fail header.php fungsi. php
  include('header.php');
  include('fungsi.php');
?>

  <!--Tajuk antaramuka -->
  <h3>Pendaftaran Peserta Baru</h3>
  <!--Borang Pendaftaran Peserta baru_-->
  <form action='peserta-signup-proses.php' method='POST'>
    <span>Nokp Peserta</span> 
    <input type='text' name='nokp' required><br>
    <span>Peserta</span>        
    <input type='text' name='nama' required><br>
    <span>Katalaluan</span>   
    <input type='password' name='katalaluan' required><br>

    <span>Sekolah</span>   
    <select name='kod_sekolah' required><br>
      <option selected value disabled>Pilih</option>
      <!-- Mengambil senarai sekolah dari fail fungsi.php -->
      <?=$list=senarai_sekolah(); ?>
    </select>

    <input type='submit' value='Daftar'>
  </form>
<?php include ('footer.php'); ?>