<?php
  

if (isset($_POST['simpan'])) {
    $id_dokter = $_POST['id_dokter'];
    $hari = $_POST['hari'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];

    $koneksi->query("UPDATE jadwal SET
     
     id_dokter = $id_dokter,
    hari = '$hari',
    mulai = '$mulai',
    selesai = '$selesai'

    WHERE id_jadwal = '$_GET[id]'");

    echo "<div class='alert alert-success text-center'> Data Berhasil Diedit </div>";
    echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=jadwal'>";
}
?>

<h2 class="text-center"> Edit Jadwal </h2>
<?php $ambil = $koneksi->query("SELECT * FROM jadwal WHERE id_jadwal = '$_GET[id]' ");
$tampil = $ambil->fetch_assoc();
?>
<!--<pre><?php print_r($tampil); ?> </pre>-->
<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="dokter">Dokter</label>
        <select class="form-control" name="id_dokter" id="dokter">
            <option>--Pilih Dokter--</option>
            <?php $ambil1 = $koneksi->query("SELECT * FROM user WHERE sebagai = 'Dokter'") ?>
            <?php while ($tampil1 = $ambil1->fetch_assoc()) { ?>
            <option <?= ($tampil['id_dokter'] == $tampil1['id_user']) ? 'selected' : '' ?>
                value='<?= $tampil1['id_user'] ?>'>
                <?php echo $tampil1['nama_lengkap'] ?></option>
            <?php } ?>
        </select>
    </div>


    <div class="form-group">
        <label for="Nama"> Hari </label>
        <input type="text" class="form-control" value="<?= $tampil['hari'] ?>" name="hari">
    </div>

    <div class="form-group">
        <label for="Nama"> Mulai </label>
        <input type="time" class="form-control" value="<?= $tampil['mulai'] ?>" name="mulai">
    </div>
    <div class="form-group">
        <label for="Nama"> Selesai </label>
        <input type="time" class="form-control" value="<?= $tampil['selesai'] ?>" name="selesai">
    </div>

    <button class="btn btn-primary" name="simpan"> Simpan </button>
    <a href="" class="btn btn-warning"> Kembali </a>
</form>