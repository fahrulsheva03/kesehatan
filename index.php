<!DOCTYPE html>
<html lang="en">

<?php 

require 'koneksi.php';
require 'header.php';
 ?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <?php require 'navbar.php'; ?>

    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Mari buat hidup Anda lebih bahagia</h3>
                                <h1>Hidup Sehat</h1>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Mari buat hidup Anda lebih bahagia</h3>
                                <h1>Gaya Hidup Baru</h1>
                            </div>
                        </div>

                        <div class="item item-third">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Mari buat hidup Anda lebih bahagia</h3>
                                    <h1>Manfaat Kesehatan Anda</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i
                                class="fa fa-h-square"></i>ealth Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>Kami adalah pusat kesehatan berbasis web yang berkomitmen untuk memberikan pelayanan
                                kesehatan terbaik kepada Anda dan keluarga.</p>
                            <p>Dibangun dengan dedikasi untuk kesejahteraan dan kualitas hidup yang lebih baik, Health
                                Center adalah tempat yang Anda dapat andalkan untuk berbagai kebutuhan kesehatan Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section id="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7720559062186!2d119.48050597430355!3d-5.140361994836849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1697742407747!5m2!1sen!2sid"
            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <div class="col-md-4 col-sm-4">
        <div class="footer-thumb">
            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Info Kontak</h4>
            <p></p>

            <div class="contact-info">
                <p><i class="fa fa-phone"></i> 081-222-3333</p>
                <p><i class="fa fa-envelope-o"></i> <a href="#">pusat@kesehatan.com</a></p>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="footer-thumb">
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="footer-thumb">
            <div class="opening-hours">
                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Jam Buka</h4>
                <p>Senin - Jum'at <span>06:00 Pagi - 10:00 Malam</span></p>
                <p>Sabtu <span>09:00 Pagi - 08:00 Malam</span></p>
                <p>Minggu <span>Tertutup</span></p>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>

</html>