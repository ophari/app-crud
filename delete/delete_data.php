<?php
    include "../connection.php";
    $id=$_GET['id'];
    $delete=mysqli_query($koneksi,"DELETE FROM data_siswa WHERE id=$id");
    if($delete){
        header("location: ../delete.php");
    }else{
        echo "gagal";
    }
?>