<?php  
# Memulakan fungsi session
session_start();

# memanggil fail header.php
include('header.php'); 
?>

<!-- Tajuk antaramuka log masuk hakim -->
<h3>Login hakim</h3>

<!-- borang daftar masuk (log in/sign in) hakim-->
<form action='hakim-login-proses.php' method='POST'>

    Nokp hakim    <input type='text' name='nokp'><br>
    Katalaluan      <input type='password' name='katalaluan' ><br>
                    <input type='submit' value='Login'>
                    
</form>

<?php include ('footer.php'); ?>