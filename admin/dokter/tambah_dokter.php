<?php 
  

 
 if (isset($_POST['simpan'])) {
 	$nama = $_POST['nama_lengkap'];
 	$email = $_POST['email'];
 	$no_telp = $_POST['no_telp'];
 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	
$koneksi->query("INSERT INTO user(nama_lengkap, email, no_telp, username, password , sebagai) 
VALUES('$nama', '$email', '$no_telp', '$username', '$password' , 'Dokter' )");

	echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan </div>";
	echo "<meta http-equiv='refresh' content='1;url=menu.php?halaman=dokter'>";
	}
?>

<h2 class="text-center"> Tambah Dokter</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Nama"> Nama Lengkap </label>
        <input type="text" class="form-control" name="nama_lengkap">
    </div>
    <div class="form-group">
        <label for="Email"> Email </label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="No"> No Telp </label>
        <input type="text" class="form-control" name="no_telp">
    </div>
    <div class="form-group">
        <label for="Username"> Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="Password"> Password </label>
        <input type="password" class="form-control" name="password">
    </div>

    <button class="btn btn-primary" name="simpan"> Simpan </button>
    <a href="" class="btn btn-warning"> Kembali </a>
</form>