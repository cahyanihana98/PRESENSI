<h2><center>Daftar Dresensi</center></h2>

<center><table border="3">
    <tr>
        <th>No</th>
        <th>ID Presensi</th>
        <th>Nama Presensi</th>
        <th>Penanggung Jawab</th>
        <th>Tanggal</th>
        <th colspan="2">.</th>
    </tr>
    </br>

<?php
    include "connect.php";
    $koneksi = mysqli_query($connect,"SELECT * from agenda");

    $no=1;
    foreach ($koneksi as $data) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><a class="presensi" href="presensi.php?namaagenda=<?php echo $data['namaagenda']; ?>"> 
                <?php echo $data['namaagenda']; ?></a></td>
            <td><?php echo $data['pj']; ?></td>
            <td><?php echo $data['tanggal']; ?></td>
            <td>
                <a class="edit" href="editAgenda.php?id=<?php echo $data['id'];?>">Edit</a>
            </td>
            <td>
                <a class="hapus" href="hapusAgenda.php?id=<?php echo $data['id'];?>">Hapus</a>
            </td>
        </tr>
<?php
    }
?>
</table>
</center>
<center><a href = 'tambahagenda.html'> Tambahkan Presensi </a></center>
</br>
<a href = 'home.php'> Kembali </a></br>
