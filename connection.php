<?php
    $host ="localhost";
    $user="root";
    $pass="";
    $db="sekolah";

    $koneksi= mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        echo"gagal";
    }

?>