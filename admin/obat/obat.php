<?php 
?>
<h2 class="text-center"> Data Obat </h2>

<table class="table table-bordered text-center" id="dataTable">
    <thead>
        <tr>
            <th> Nama Obat </th>
            <th> Jenis Obat </th>
            <th> Harga </th>
            <th> Stok Obat </th>
            <th> Tanggal Kadaluarsa </th>
        </tr>
        <thead>
        <tbody>
            <?php $ambil = $koneksi->query("SELECT * FROM obat"); ?>
            <?php while ($tampil = $ambil->fetch_assoc()) {?>
            <tr>
                <td><?php echo $tampil['nama_obat'] ?></td>
                <td><?php echo $tampil['jenis_obat'] ?></td>
                <td>Rp <?php echo number_format($tampil['harga'])  ?></td>
                <td><?php echo $tampil['stok_obat'] ?></td>
                <td><?php echo $tampil['tanggal_kadaluarsa'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
</table>