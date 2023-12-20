<h2 class="text-left mb-4"> Data Dokter </h2>
<table class="table table-bordered text-center" id="dataTable">
    <thead>
        <tr>
            <th> Nama Dokter </th>
            <th> Hari </th>
            <th> Mulai </th>
            <th> Selesai </th>
            <th>
                <a href="menu.php?halaman=tambah_jadwal" class="btn btn-primary"> [+] Tambah Jadwal Dokter </a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php $ambil = $koneksi->query("SELECT * FROM jadwal
        JOIN
        user
        ON
        jadwal.id_dokter = user.id_user
        "); ?>
        <?php while ($tampil = $ambil->fetch_assoc()) {?>
        <tr>
            <td><?php echo $tampil['nama_lengkap']; ?></td>
            <td><?php echo $tampil['hari']; ?></td>
            <td><?php echo $tampil['mulai']; ?></td>
            <td><?php echo $tampil['selesai']; ?></td>

            <td> <a href="menu.php?halaman=edit_jadwal&id=<?php echo $tampil['id_jadwal'] ?>" class="btn btn-info"> Edit
                    Data </a>
                <a href="menu.php?halaman=hapus_jadwal&id=<?php echo $tampil['id_jadwal'] ?>" class="btn btn-danger"
                    onclick="return confirm('Apakah anda yakin ingin menghapus user ini?') "> Hapus </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>