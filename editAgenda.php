<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="backGround.css">
    <title>Edit</title>
  </head>
<?php

    include "connect.php";
  
    $id=$_GET['id'];
    $koneksi = mysqli_query($connect,"SELECT * FROM agenda where id='$id'");
    foreach($koneksi as $data)
    {?>
        <body class="backG-1">
        <div class="p-3">
            <h2 class="teks-comfortaa text-white">Edit</h2>
            <small id="emailHelp" class="form-text text-muted mb-3">Halaman untuk mengubah format absensi</small>
            <p class="teks-comfortaa text-white">lang <span class="badge badge-primary">ID</span></p>
        </div>
        <hr class="my-4">
        <form action="updateAgenda.php " method="post">
            <table align="center">
             <tr>
                    <td>
                    <label for="exampleInputEmail1" class="text-white">ID Presensi</label>
                        <input class="form-control" type="text" name="id" value="<?php echo $data['id']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleInputEmail1" class="text-white">Nama Agenda</label>
                        <input class="form-control" type="text" name="npresensi" value="<?php echo $data ['namaagenda']?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="exampleInputEmail1" class="text-white">Penanggung Jawab</label>
                        <input class="form-control" type="text" name="pj" value="<?php echo $data['pj']?>">
                    </td>
                </tr>
                 <tr>
                    <td><label for="exampleInputEmail1" class="text-white">Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" value="<?php echo $data['tanggal']?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="simpan" class="btn btn-primary mt-3"></td>
                </tr>
            </table>
            
        </form><br>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
  <?php
    }

?>
