<h2 class="text-left mb-4"> Data Dokter </h2>
<table class="table table-bordered text-center" id="dataTable">
    <thead>
        <tr>
            <th> Nama Dokter </th>
            <th> Hari </th>
            <th> Mulai </th>
            <th> Selesai </th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $id_dokter = $_SESSION['username']['id_user'];
        
        $ambil = $koneksi->query("SELECT * FROM jadwal
        JOIN
        user
        ON
        jadwal.id_dokter = user.id_user
        WHERE 
        id_dokter = $id_dokter 
        "); ?>
        <?php while ($tampil = $ambil->fetch_assoc()) {?>
        <tr>
            <td><?php echo $tampil['nama_lengkap']; ?></td>
            <td><?php echo $tampil['hari']; ?></td>
            <td><?php echo $tampil['mulai']; ?></td>
            <td><?php echo $tampil['selesai']; ?></td>

        </tr>
        <?php } ?>
    </tbody>
</table>