<?php   

$ambil = $koneksi->query("SELECT * FROM jadwal where id_jadwal = '$_GET[id]'");
$tampil = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM jadwal WHERE id_jadwal = '$_GET[id]'");
echo " <script>location='menu.php?halaman=jadwal';</script>";
?>