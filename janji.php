<!DOCTYPE html>
<html lang="en">

<?php 
require 'koneksi.php';
require 'header.php';

if(!isset($_SESSION['login'])){
     echo "
     <script>
     alert('Anda belum bisa buat perjanjian, Harus Login Terlebih Dahulu')
     location = 'index.php'
     </script>
     ";
}

?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <?php require 'navbar.php'; ?>

    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="users/assets/images/appointment-image.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Membuat janji</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Alamat Email">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Pilih Tanggal</label>
                                <input type="date" name="date" value="" class="form-control">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="select">Pilih Dapartemen</label>
                                <select class="form-control">
                                    <option>Kesehatan umum</option>
                                    <option>Kardiologi</option>
                                    <option>Dental</option>
                                    <option>Penelitian medis</option>
                                </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Nomor Handphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="No Hp">
                                <label for="Message">Pesan Tambahan</label>
                                <textarea class="form-control" rows="5" id="message" name="message"
                                    placeholder="Pesan"></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require 'footer.php'; ?>

</body>

</html>