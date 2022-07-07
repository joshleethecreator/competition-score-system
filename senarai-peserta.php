<?php
    # memulakan fungsi session
    session_start();
    # memanggil fail header, guard-hakim, connection dan fungsi
    include('header.php');
    // include('guard-hakim.php');
    include('connection.php');
    include("fungsi.php");
?>

<div class="px-2 py-2">
    <h3>Senarai Peserta</h3>
    <!-- Bahagian 1: memaparkan borang untuk memilih sekolah -->
    <form method="POST">
        <select name="kod_sekolah">
            <option selected value disabled>Carian Mengikut Sekolah</option>
            <!-- Memaparkan senarai sekolah dalam bentuk drop down list -->
            <?= $list=senarai_sekolah(); ?>
        '</select> 
        <input type="submit" value="Papar">
    </form>
    <!-- Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan -->
    <?php include("butang-saiz.php"); ?>
    <!-- Header bagi jadual untuk memaparkan senarai peserta -->
    <table width="100%" border="1" id="saiz">
        <tr>
            <td>Nama</td>
            <td>No KP</td>
            <td>Sekolah</td>
            <td>Katalaluan</td>
            <td>Tindakan</td>
        </tr>
        <?php
        # syarat tambahan yang akan dimasukkan dalam arahan(query) senarai peserta
        $tambahan = "";
        if(!empty($_POST['kod_sekolah'])){
            $tambahan = "and peserta.kod_sekolah = '".$_POST['kod_sekolah']."'";
        }
        # arahan query untuk mencari senarai nama peserta
        $arahan_papar = "SELECT * FROM peserta, sekolah WHERE peserta.kod_sekolah = sekolah.kod_sekolah $tambahan ";
        $laksana = mysqli_query($condb, $arahan_papar);
        # mengambil data yang ditemui
        while($m = mysqli_fetch_array($laksana)){
            #umpukan data kepada tatasusunan bagi tujuan kemaskini peserta
            $data_get=array(
                'nama' => $m['nama_peserta'],
                'nokp' => $m['nokp_peserta'],
                    'katalaluan' => $m['katalaluan_peserta'],
                    'kod_sekolah' => $m['kod_sekolah'],
                    'nama_sekolah' => $m['nama_sekolah'],
                );                
                # memaparkan senarai nama dalam jadual
                echo"<tr>
                <td>".$m['nama_peserta']."</td>
                <td>".$m['nokp_peserta']."</td>
                <td>".$m['nama_sekolah']."</td>
                <td>".$m['katalaluan_peserta']."</td>";                
                # memaparkan navigasi untuk kemaskini dan hapus data peserta
                echo"<td>                
                <a class='btn btn-light border border-2 my-2' href='peserta-kemaskini-borang.php?".http_build_query($data_get)."'>
                Kemaskini</a>                
                <a class='btn btn-light border border-2 my-2' href='peserta-padam-proses.php?nokp=".$m['nokp_peserta']."'onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\">Hapus</a>
                </td>
                </tr>";
            }
    ?>
    </table>
    <button onclick="window.print()" type="submit" name="print" class="btn">Print</button>
</div>
<?php include('footer.php'); ?>