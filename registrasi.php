<?php
// Menginclude Koneksi agar bisa terkoneksi pada Database	
include 'koneksi.php';

// Mengeceka apakah User telah mengklik tombol Registrasi
if(isset($_POST['register'])){

    // Data User diambil melalui Method POST
    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    
    // Data yang suda di ambil di masukan ke dalam Database Melalui Fungsi Mysqli
$insert = mysqli_query($koneksi, "INSERT INTO pasien SET 
nama = '$nama', 
no_ktp = '$no_ktp', 
pekerjaan = '$pekerjaan', 
alamat = '$alamat', 
jk = '$jk', 
umur = '$umur' 

" );

// Jika Data Sudah di isi dengan tepat, maka akan di arahkan ke tampilan Login
if ($insert){
    echo '<script>
    alert("Registrasi Berhasil")
    document.location.href="login.php"
    </script>';
}

// Jika Gagal maka akan kembali ke tampilan Registrasi
else{
    echo '<script>
    alert("Registrasi Gagal!!")
    </script>';
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/login/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: #f5f5f5;
    }

    .login-wrap {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .login-form .form-group {
        margin-bottom: 20px;
    }

    .login-form input[type="text"],
    .login-form input[type="email"],
    .login-form input[type="password"] {
        border: none;
        border-bottom: 2px solid #007bff;
        border-radius: 0;
        padding: 10px 0;
        background: transparent;
    }

    .login-form input[type="text"]:focus,
    .login-form input[type="email"]:focus,
    .login-form input[type="password"]:focus {
        border-color: #0056b3;
    }

    .login-form .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
    }

    .login-form .btn-primary:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Silahkan Registrasi</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Registrasi</h3>
                        <form action="" method="post" class="login-form">

                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="no_ktp" placeholder="Nommor KTP" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan"
                                    required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="umur" placeholder="Umur" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" name="register"
                                    class="btn btn-primary btn-block">Registrasi</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="login.php" style="color: black;">Sudah punya akun? Login di sini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/login/js/jquery.min.js"></script>
    <script src="assets/login/js/popper.js"></script>
    <script src="assets/login/js/bootstrap.min.js"></script>
    <script src="assets/login/js/main.js"></script>
</body>

</html>