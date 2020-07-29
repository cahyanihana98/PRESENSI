<?php

    include "connect.php";
    $koneksi = mysqli_query($connect,"SELECT * from usertable");

    $no=1;
    foreach ($koneksi as $data) {
        ?>

       <table>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
          </tr>
       </table>
<?php
    }
?>