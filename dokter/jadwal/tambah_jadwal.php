<?php 

 
 if (isset($_POST['simpan'])) {
 	$id_dokter = $_POST['id_dokter'];
 	$hari = $_POST['hari'];
 	$mulai = $_POST['mulai'];
 	$selesai = $_POST['selesai'];
 	
$koneksi->query(" INSERT INTO jadwal SET  

id_dokter = $id_dokter,
hari = '$hari',
mulai = '$mulai',
selesai = '$selesai'
 ");

	echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan </div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=jadwal'>";
	}
?>

<h2 class="text-center"> Tambah Jadwal Dokter</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="dokter">Dokter</label>
        <select class="form-control" name="id_dokter" id="dokter">
            <option>--Pilih Dokter--</option>
            <?php $ambil = $koneksi->query("SELECT * FROM user WHERE sebagai = 'Dokter'") ?>
            <?php while ($tampil = $ambil->fetch_assoc()) { ?>
            <option value='<?= $tampil['id_user'] ?>'><?php echo $tampil['nama_lengkap'] ?></option>
            <?php } ?>
        </select>
    </div>


    <div class="form-group">
        <label for="Nama"> Hari </label>
        <input type="text" class="form-control" name="hari">
    </div>

    <div class="form-group">
        <label for="Nama"> Mulai </label>
        <input type="time" class="form-control" name="mulai">
    </div>
    <div class="form-group">
        <label for="Nama"> Selesai </label>
        <input type="time" class="form-control" name="selesai">
    </div>




    <button class="btn btn-primary" name="simpan"> Simpan </button>
    <a href="" class="btn btn-warning"> Kembali </a>
</form>