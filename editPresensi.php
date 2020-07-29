<?php

    include "connect.php";
  
    $id=$_GET['id'];
    $koneksi = mysqli_query($connect,"SELECT * FROM pengguna where id='$id'");
    foreach($koneksi as $data)
    {?>
        <body>
       <center><form action="updatePresensi.php " method="post">
            <table>
                 <tr>
                    <td>ID Pengguna</td>
                    <td>
                        <input type="text" name="id" value="<?php echo $data['id']?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $data ['nama']?>">
                    </td>
                </tr>
                <tr>
                     <td>Alamat
                     </td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
            
        </form></center><br>
        <a href = 'presensi.php'> Kembali </a></br>
</body>
  <?php
    }

?>
