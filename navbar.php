<!-- Bagian Navbar -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="smoothScroll">Home</a></li>
                <li><a href="about.php" class="smoothScroll" target="_parent">About Us</a></li>
                <!-- <li><a href="#team" class="smoothScroll">Doctors</a></li> -->
                <li><a href="contact.php" class="smoothScroll">Contact</a></li>
                <?php
                if(isset($_SESSION['login'])) {
                ?>
                <li><a href="keluar.php" class="smoothScroll">Logout</a></li>
                <?php }else{ ?>
                <li><a href="login.php" class="smoothScroll" target="">Login</a></li>
                <li><a href="registrasi.php" class="smoothScroll" target="">Sign Up</a></li>
                <?php } ?>
                <li class="appointment-btn"><a href="janji.php">Membuat Janji</a></li>
            </ul>
        </div>
    </div>
</section>