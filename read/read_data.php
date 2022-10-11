<?php
    include "connection.php";
    $read = mysqli_query($koneksi,"SELECT * FROM data_siswa");
    $result =[];
    while ($data=mysqli_fetch_array($read)) {
        $result[]= $data;
    }

?>