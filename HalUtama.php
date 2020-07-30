<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="mainStyle.css">
    <link rel="stylesheet" type="text/css" href="load.css">
	<link rel="stylesheet" type="text/css" href="backGround.css">
	<link rel="stylesheet" type="text/css" href="trys.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Absense</title>
  </head>
  <body class="backG">
  		<div class="loader">
    		<img src="img/Ripple-1s-200px.gif"> 
    		<p class="fnt">Memuat</p>
    	</div>	
	 <div class="jumbotron jumbotron-fluid">
	 	<nav class="navbar navbar-light">
		  <a class="navbar-brand" href="#"><div class="container bg-success">Absense<ion-icon name="create"></ion-icon></div><small>V0.0.1</small>
		  </a>
		</nav>	
	  <div class="container">
	    <h1 class="display-4"><span>Absense </span>make you <span>Easier</span><br>to make daily report</h1>
	  </div>
	</div>

	<div class="container search-panel" id="tombol">
		<div class="mask">
			<p>About us</p>
		</div>
	</div>

	<div class="popUp">
		<div class="popUp-content">
			<div class="close">
				<ion-icon name="close-outline"></ion-icon>
			</div>
			<h3>TEAM</h3>
			<hr class="my-4">
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Cahyani | Leader"><img src="img/770046_people_512x512.png"></a>	
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Naufal | Programmer"><img src="img/770032_people_512x512.png"></a>
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Tariq | Front End Web"><img src="img/770044_people_512x512.png"></a>
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="Yusuf | Front End Mobile"><img src="img/770047_people_512x512.png"></a>
		</div>
	</div>

  	</br>

		<?php

			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page ="home";
			}

			if($page == "home"){
				?>
				<div class="container container-x">
				<iframe src="rumah.html" name="iframe_a" title="Iframe Example" class="response-iframe"></iframe>
			</div>
				<?php
			}
			elseif($page == "tambah"){
				?>
				<div class="container container-x">
				<iframe src="Tambah.html" name="iframe_a"title="Iframe Example" class="response-iframe"></iframe>
			</div>
				
				<?php
			}
			elseif($page == "manage"){
				?>
				<div class="container container-x">
				<iframe src="Look.php" name="iframe_a" title="Iframe Example" class="response-iframe"></iframe>
			</div>
				
				<?php
			}
			
		?>	
  	
  	<table align="center" class="mb-5 mt-5">
    	<tr><td>
       		<a href="?page=home" class="tmbl tmbl-light tmbl-lg active" role="button" aria-pressed="true"><ion-icon name="home-outline"></ion-icon></a>
    		<a href="?page=tambah" class="tmbl tmbl-light tmbl-lg active" role="button" aria-pressed="true"><ion-icon name="add-circle-outline"></ion-icon></a>
    		<a href="?page=manage" class="tmbl tmbl-light tmbl-lg active" role="button" aria-pressed="true"><ion-icon name="folder-open-outline"></ion-icon></a>
			<button type="button" class="tmbl tmbl-light tmbl-lg active" role="button" aria-pressed="true" id="logout"><ion-icon name="log-out-outline"></ion-icon></button>
    	</td></tr>
    </table>
    <hr class="my-4">

    <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="text-center text-white teks-openSans ">Since 2020 by THYN Group</p>
        </div>
     </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!--FONT-->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
	<!-- AKHIR FONT -->

    <script type="text/javascript">
    	window.addEventListener("load",function(){
    			const loader = document.querySelector(".loader");
    			loader.className +=" hidden"
    	});
    </script>
    <script type="text/javascript">
    	document.getElementById('tombol').addEventListener("click", function(){
    		document.querySelector(".popUp").style.display = "flex";
    	})

    	document.querySelector(".close").addEventListener("click", function(){
    		document.querySelector(".popUp").style.display = "none";
    	})

		document.getElementById('logout').addEventListener('click', function(){
			var x = confirm('apakah anda yakin akan log out?');
			if(x==true){
				window.location.href = "logout.php";
			}
		})	
	</script>
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
  </body>
</html>