<?php

    include "connect.php";
  
    $id=$_GET['id'];
    $koneksi = mysqli_query($connect,"SELECT * FROM agenda where id='$id'");
    foreach($koneksi as $data)
    {?>
        <body>
        <center><form action="updateAgenda.php " method="post">
            <table>
             <tr>
                    <td>ID Presensi</td>
                    <td>
                        <input type="text" name="id" value="<?php echo $data['id']?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Agenda</td>
                    <td>
                        <input type="text" name="npresensi" value="<?php echo $data ['namaagenda']?>">
                    </td>
                </tr>
                <tr>
                     <td>Penanggung Jawab</td>
                    <td><input type="text" name="pj" value="<?php echo $data['pj']?>">
                    </td>
                </tr>
                 <tr>
                     <td>Tanggal</td>
                    <td><input type="date" name="tanggal" value="<?php echo $data['tanggal']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
            
        </form></center><br>
        <a href = 'lihatagenda.php'> Kembali </a></br>
</body>
  <?php
    }

?>
