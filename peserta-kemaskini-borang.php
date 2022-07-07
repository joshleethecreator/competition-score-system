<?php
session_start();
include ('header.php');
include('fungsi.php');

// if(empty($_GET)){
//     die("<script>window.location.href='senarai-peserta.php';</script>");
// }
// ?>

<div class="container my-5">

    <h3>kemaskini peserta baru</h3>
    <form action='peserta-kemaskini-proses.php?nokp_lama=<?=$_GET['nokp']?>' method='POST'>
        
        <input class="form-control" type='text' name='nama' value='<?=$_GET['nama']?>' required><br>
        <input class="form-control" type='text' name='nokp' value='<?=$_GET['nokp']?>' required><br>
        <input class="form-control" type='password' name='katalaluan' value='<?=$_GET['katalaluan']?>' required><br>
        <select name='kod_sekolah'required>
            <option value='<?=$_GET['kod_sekolah']?>'>
                <?= $_GET['nama_sekolah']?>
            </option>
            <?=$list=senarai_sekolah();?>
        </select><br>
        
        <input class="btn btn-light border border-2 mt-2" type='submit' value='Kemaskini'>
    </form>
</div>
<?php include('footer.php');?>