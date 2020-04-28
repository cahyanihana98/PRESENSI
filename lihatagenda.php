
<h1 align="center">Daftar Presensi</h1>
<table border="1" align="center">
    <thead>
   	<tr>
    	<th>Nama Presensi</th>
        <th>Penanggung Jawab</th>
        <th>Tanggal</th>
    </tr>
    </thead>
    <?php 

		$con = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($con, 'presensi');
		$con = mysqli_query($con,"SELECT * FROM agenda");
		foreach ($con as $data) {
	?>
		<tr>

			<td align="center"><a class="presensi" href="presensi.php?namaagenda=<?php echo $data['namaagenda']; ?>"> <?php echo $data['namaagenda']; ?></a></td>

			<td align="center"><?php echo $data['pj']; ?></td>
			<td align="center"><?php echo $data['tanggal']; ?></td>
		</tr>
		<?php } ?>
	</table>
</br>
<a href = 'home.php'> Kembali </a></br>
<a href = 'tambahagenda.html'> Tambahkan Presensi </a>