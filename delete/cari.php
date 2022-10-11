<?php
    include "../connection.php";
    if(isset($_GET['find'])){
    $find= $_GET['find']; 
    $select=mysqli_query($koneksi,"DELETE FROM data_siswa WHERE id='$find'");
    if($select){
        header("location: ../index.php");
    }else{
        echo "gagal";
    }
    }
 // $id= $_GET['id'];
?>