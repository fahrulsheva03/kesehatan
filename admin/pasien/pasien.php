<?php
?>
<h2 class="text-center"> Data Pasien </h2>
<div class="table-responsive">

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No KTP</th>
                <th>Pekerjaan</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $ambil = $koneksi->query("SELECT * FROM pasien") ?>

            <?php while ($tampil = $ambil->fetch_assoc()) { ?>
            <!-- <pre><?php print_r($tampil) ?></pre> -->

            <tr>
                <td><?php echo $tampil['nama'] ?></td>
                <td><?php echo $tampil['no_ktp'] ?></td>
                <td><?php echo $tampil['pekerjaan'] ?></td>
                <td><?php echo $tampil['alamat'] ?></td>
                <td><?php echo $tampil['jk'] ?></td>
                <td><?php echo $tampil['umur'] ?> Thn</td>
                <td><?php echo $tampil['username'] ?> </td>
                <td><?php echo $tampil['password'] ?> </td>

                <td>
                    <a href="menu.php?halaman=ubah_pasien&id=<?php echo $tampil['id_pasien'] ?>"
                        class="badge badge-warning">
                        Ubah </a>
                    <a href="menu.php?halaman=hapus_pasien&id=<?php echo $tampil['id_pasien'] ?>"
                        onclick="return confirm('Apakah anda yakin akan menghapus data pasien ini??')"
                        class="badge badge-danger"> Hapus </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>