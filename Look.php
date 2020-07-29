<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="backGround.css">
    <link rel="stylesheet" type="text/css" href="tables.css">
    <title>Hello, world!</title>
  </head>
  <body class="backG-1">
    <div class="p-3">
      <h2 class="teks-comfortaa text-white">Manage</h2>
      <small id="emailHelp" class="form-text text-muted mb-3">Halaman untuk mengatur absensi yang anda miliki</small>
      <p class="teks-comfortaa text-white">lang <span class="badge badge-primary">ID</span></p>
    </div>
    <hr class="my-4">
    
        <table align="center" class="tableCustom mx-auto">
          <thead >
          <tr>
          <th width="50px">No</th>
          <th width="100px">ID</th>
            <th width="300px">Nama Presensi</th>
            <th width="300px">Penanggung Jawab</th>
            <th width="150px">Tanggal</th>
            <th colspan="2">OPSI</th>
          </tr>
          </thead>
          <tbody>
          <?php 

          $con = mysqli_connect('localhost', 'root', '');
          mysqli_select_db($con, 'presensi');
          $con = mysqli_query($con,"SELECT * FROM agenda");
          $no=1;
          foreach ($con as $data) {
        ?>
              <tr>
                <td align="center"><?php echo $no++; ?></td>
                <td align="center"><?php echo $data['id']; ?></td>
                <td align="center"><a class="presensi" href="presensi.php?namaagenda=<?php echo $data['namaagenda']; ?>"> <?php echo $data['namaagenda']; ?></a></td>
                <td align="center"><?php echo $data['pj']; ?></td>
                <td align="center"><?php echo $data['tanggal']; ?></td>
                <td>
                  <a class="edit" href="editAgenda.php?id=<?php echo $data['id'];?>"><ion-icon name="pencil-outline"></ion-icon></a>
                </td>
                <td>
                    <a class="hapus" href="hapusAgenda.php?id=<?php echo $data['id'];?>"><ion-icon name="trash-outline"></ion-icon></a>
                </td>
              </tr> 
          <?php } ?>
          </tbody>
        </table>
  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>       
  </body>
</html>