<h2><center>Isi presensi</center></h2>

<center><table border="3">
    <tr>
        <th>No</th>
        <th>ID Pengguna</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">.</th>
    </tr>


<?php
    include "connect.php";
    $koneksi = mysqli_query($connect,"SELECT * from pengguna");

    $no=1;
    foreach ($koneksi as $data) {
        ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a class="edit" href="editPresensi.php?id=<?php echo $data['id'];?>">Edit</a>
            </td>
            <td>
                <a class="hapus" href="hapusPresensi.php?id=<?php echo $data['id'];?>">Hapus</a>
            </td>
        </tr>
<?php
    }
?>

</table></center>

    <center><a href="inputPresensi.php">Tambah Data</a></center><br>

    <a href = 'lihatagenda.php'> Kembali </a></br>