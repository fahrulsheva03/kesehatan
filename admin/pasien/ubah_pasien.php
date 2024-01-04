<?php
$ambil = $koneksi->query("SELECT * FROM pasien WHERE id_pasien = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $username = $_POST['username'];
    $password = $_POST['password'];

	$koneksi->query("UPDATE pasien SET 
        nama = '$nama', 
        no_ktp = '$no_ktp', 
        pekerjaan = '$pekerjaan', 
        alamat = '$alamat', 
        jk = '$jk', 
        username = '$username', 
        password = '$password', 
        umur = '$umur'  
        WHERE id_pasien = '$_GET[id]'");

	echo " <br><div class='alert alert-success text-center'> Data Berhasil Di Edit </div>";
	echo " <meta http-equiv='refresh' content='1;url=menu.php?halaman=pasien'>";
}
?>

<h2 class="text-center"> Ubah Data Pasien </h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-row justify-content-center">
        
        <div class="form-group col-md-5">
            <label for=""> Nama </label>
            <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> No KTP </label>
            <input type="text" class="form-control" name="no_ktp" value="<?php echo $pecah['no_ktp'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Pekerjaan </label>
            <input type="text" class="form-control" 
            name="pekerjaan" value="<?php echo $pecah['pekerjaan'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Alamat </label>
            <input type="text" class="form-control" 
            name="alamat" value="<?php echo $pecah['alamat'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Jenis Kelamin </label>
            <input type="text" class="form-control" 
            name="jk" value="<?php echo $pecah['jk'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Umur </label>
            <input type="text" class="form-control" 
            name="umur" value="<?php echo $pecah['umur'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Username </label>
            <input type="text" class="form-control" 
            name="username" value="<?php echo $pecah['username'] ?>">
        </div>
        <div class="form-group col-md-5">
            <label for=""> Password </label>
            <input type="text" class="form-control" 
            name="password" value="<?php echo $pecah['password'] ?>">
        </div>

        


    </div>
    <div class="text-center">
        <button class="btn btn-primary" name="simpan"> Simpan </button>
        <a href="menu.php?halaman=pasien" class="btn btn-warning"> Kembali</a>
    </div>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function() {
    if ($('#jenis_pasien').val() == 'NON BPJS') {
        $('#nomor_bpjs').addClass('d-none');
        $('#no_bpjs').val('');
    }
    console.log()
    $('#jenis_pasien').change(function(e) {
        e.preventDefault();
        if (this.value == 'BPJS') {
            $('#nomor_bpjs').removeClass('d-none');
        } else {
            $('#nomor_bpjs').addClass('d-none');
            $('#no_bpjs').val('');

        }
    });
});
</script>