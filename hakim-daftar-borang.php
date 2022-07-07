<?php 
# memulakan fungsi session
session_start();

# memanggil fail header dan guard-hakim
include('header.php');
include('guard-hakim.php');
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-8">
        <!-- tajuk antaramuka -->
        <h3>Pendaftaran Hakim Baru</h3>
        
        <!-- Borang pentaftaran hakim baru -->
        <form action='hakim-daftar-proses.php' class="" method='POST'>
            nama        <input  type='text'     class="form-control border-1" name='nama'><br>
            nokp        <input  type='text'     class="form-control border-1" name='nokp'><br>
            katalaluan  <input  type='password' class="form-control border-1" name='katalaluan'><br>
            <input  type='submit'   class="form-control border-1" value='Simpan'>
        </form>
    </div>
  </div>
</div>
<?php include ('footer.php'); ?>