<?php  
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php'); 
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <!--Tajuk antaramuka -->
      <h3>Login Peserta</h3>
      <!--Borang Pendaftaran Peserta baru_-->
      <form class="d-flex flex-column" action='peserta-login-proses.php' method='POST'>
        <label class="form-label">Nokp Peserta:</label>
        <input class="form-control" type='text' name='nokp' placeholder="cth:050422070451" pattern="[0-9]{12}"
  oninvalid="this.setCustomValidity('Sila masukkan 12 digit nombor sahaja')" oninput="this.setCustomValidity('')"
 required required> 
        <label class="form-label">Katalaluan:</label>   
        <input class="form-control" type='password' name='katalaluan' required>
        
        <input class="mt-2" type='submit' value='Login'>
      </form>
    </div>
  </div>
</div>

<?php include ('footer.php'); ?>