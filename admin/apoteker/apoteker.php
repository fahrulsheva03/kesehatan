<h2 class="text-left mb-4"> Data Apoteker </h2>
<table class="table table-bordered text-center" id="dataTable">
    <thead>
        <tr>
            <th> Username </th>
            <th> Email </th>
            <th> Nama Lengkap </th>
            <th> No Telp </th>
            <th> <a href="menu.php?halaman=tambah_apoteker" class="btn btn-primary"> [+] Tambah Apoteker </a> </th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM user WHERE sebagai = 'apoteker'"); ?>
        <?php while ($tampil = $ambil->fetch_assoc()) {?>
        <tr>
            <td><?php echo $tampil['username']; ?></td>
            <td><?php echo $tampil['email']; ?></td>
            <td><?php echo $tampil['nama_lengkap']; ?></td>
            <td><?php echo $tampil['no_telp']; ?></td>

            <td> <a href="menu.php?halaman=edit_apoteker&id=<?php echo $tampil['id_user'] ?>" class="btn btn-info"> Edit
                    Data </a>
                <a href="menu.php?halaman=hapus_apoteker&id=<?php echo $tampil['id_user'] ?>" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') "> Hapus </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>