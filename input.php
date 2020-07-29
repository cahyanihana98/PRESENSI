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
    <title>Hello, world!</title>
  </head>
  <body class="backG-1">
  	<div class="p-3">
      <h2 class="teks-comfortaa text-white">Isi absensi</h2>
      <small id="emailHelp" class="form-text text-muted mb-3">Halaman untuk mengisi absensi</small>
      <p class="teks-comfortaa text-white">lang <span class="badge badge-primary">ID</span></p>
    </div>
    <hr class="my-4">
    <table align="center">
  		<tr>
  			<td >
  				  	<form method="post" action="input_control.php">
  		<div class="form-group w-100">
   			<label for="exampleInputEmail1" class="text-white">ID</label>
    		<input type="text" class="form-control" name="id" placeholder="Nama" required>
  		</div>
  		<div class="form-group w-100">
    		<label for="exampleInputPassword1" class="text-white">Nama</label>
    		<input type="text" class="form-control" name="nama" placeholder="Penanggung Jawab" required>
  		</div>
  		<div class="form-group w-100">
    		<label for="exampleInputPassword1" class="text-white">Alamat</label>
    		<input type="text" class="form-control" name="alamat" placeholder="tanggal" required>
    		<small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  		</div>
  		<button type="submit" class="btn btn-primary" value="Submit">Submit</button>
	</form>
  			</td>
  		</tr>
  	</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>