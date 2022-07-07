<?php
  # Memulakan fungsi session
  session_start();
  #memanggil fail header.php fungsi. php
  include('header.php');
  include('fungsi.php');
?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <!--Tajuk antaramuka -->
      <h3>Pendaftaran Peserta Baru</h3>
      <!--Borang Pendaftaran Peserta baru_-->
      <form class="d-flex flex-column" action='peserta-signup-proses.php' method='POST'>
        <label class="form-label">Nokp Peserta:</label> 
        <input type='text' name='nokp' placeholder="cth:050422070451" pattern="[0-9]{12}" oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')" oninput="this.setCustomValidity('')" required>
        <label class="form-label">Nama Peserta:</label>        
        <input type='text' name='nama' placeholder="Nama Penuh Anda" required>
        <label class="form-label">Katalaluan:</label>   
        <input type='password' name='katalaluan' required>
        
        <label class="form-label">Sekolah:</label>   
        <select name='kod_sekolah' required>
        <option selected value disabled>Pilih:</option>
        <!-- Mengambil senarai sekolah dari fail fungsi.php -->
          <?=$list=senarai_sekolah(); ?>
        </select>
        
        <input class="mt-2" type='submit' value='Daftar'>
      </form>
    </div>
  </div>
</div>
  
<?php include ('footer.php'); ?>