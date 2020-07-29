<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="tables.css">
    <link rel="stylesheet" type="text/css" href="backGround.css">
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <title>Isi absen</title>
  </head>
  <body class="backG-1" style="color: #d1dfeb;">
    <div class="p-3">
        <h2 class="teks-comfortaa text-white">Index Absensi</h2>
        <small id="emailHelp" class="form-text text-muted mb-3">Halaman untuk mengatur absensi yang anda miliki</small>
        <p class="teks-comfortaa text-white">lang <span class="badge badge-primary">ID</span></p>
    </div>
    <hr class="my-4">
    <h2><center>Isi presensi</center></h2>
    <table align="center" class="tableCustom mx-auto">
        <thead class="thead-dark"> 
            <tr>
                <th>No</th>
                <th>ID Pengguna</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th colspan="2">OPSI</th>
            </tr>
        </thead>
        


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
                        <a class="edit" href="edit.php?id=<?php echo $data['id'];?>"><ion-icon name="pencil-outline"></ion-icon></a>
                    </td>
                    <td>
                        <a class="hapus" href="hapusPresensi.php?id=<?php echo $data['id'];?>"><ion-icon name="trash-outline"></ion-icon></a>
                    </td>
                </tr>
        <?php
            }
        ?>
        
    </table>
    <center><a href="input.php" class="tmbl tmbl-light tmbl-lg active" role="button" aria-pressed="true"><ion-icon name="add-circle-outline"></ion-icon>Tambah Data</a></center><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>        
</body>
</html>





<center></center>

    