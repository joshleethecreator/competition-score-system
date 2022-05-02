<?php  
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php'); 
?>

<!-- Tajuk antaramuka log masuk peserta-->
<h3>Login Peserta</h3>

<!-- Borang daftar masuk (signin) peserta -->
<form action='peserta-login-proses.php' method='POST'>

    Nokp Peserta    <input type='text' name='nokp'><br>
    Katalaluan      <input type='password' name='katalaluan' ><br>
                    <input type='submit' value='Login'>
                    
</form>

<?php include ('footer.php'); ?>