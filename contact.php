<!DOCTYPE html>
<html lang="en">

<?php require 'header.php'; ?>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <?php require 'navbar.php'; ?>

     <!-- GOOGLE MAP -->
     <section id="google-map">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7720559062186!2d119.48050597430355!3d-5.140361994836849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee33495a4f597%3A0xa374c458c000bb06!2sDipa%20Makassar%20University!5e0!3m2!1sen!2sid!4v1697742407747!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <p>Senin - Jum'at <span>06:00 AM - 10:00 PM</span></p>
                    <p>Sabtu <span>09:00 AM - 08:00 PM</span></p>
                    <p>Minggu <span>Closed</span></p>
               </div>

          </div>
     </div>


     <?php require 'footer.php'; ?>

</body>

</html>