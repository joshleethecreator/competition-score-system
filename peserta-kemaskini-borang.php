<?php
session_start();
include ('header.php');
include('fungsi.php');

// if(empty($_GET)){
//     die("<script>window.location.href='senarai-peserta.php';</script>");
// }
// ?>

<h3>kemaskini peserta baru</h3>
<form action='peserta-kemaskini-proses.php?nokp_lama=<?=$_GET['nokp']?>' method='POST'>

<input type='text' name='nama' value='<?=$_GET['nama']?>' required><br>
<input type='text' name='nokp' value='<?=$_GET['nokp']?>' required><br>
<input type='password' name='katalaluan' value='<?=$_GET['katalaluan']?>' required><br>
<select name='kod_sekolah'required>
    <option value='<?=$_GET['kod_sekolah']?>'>
    <?= $_GET['nama_sekolah']?>
</option>
<?=$list=senarai_sekolah();?>
</select><br>

<input type='submit' value='Kemaskini'>
</form>
<?php include('footer.php');?>