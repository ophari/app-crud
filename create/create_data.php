<?php
    include "../connection.php";
    $id=rand(0000,9999);
    $nama_lengkap=$_POST['nama_lengkap'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];

    $insert=mysqli_query($koneksi,"INSERT INTO data_siswa SET id='$id', nama_lengkap='$nama_lengkap',kelas='$kelas',jurusan='$jurusan'");
    if($insert){
        $pesan = 'data sudah masuk';
        echo "<SCRIPT> //not showing me this
            alert('$pesan')
            window.location.replace('../index.php');
            </SCRIPT>";
      
    }else{
        echo "gagal";
    }
      
?>