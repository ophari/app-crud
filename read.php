<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applikasi CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <ul class="menu">
        <li><a href="index.php">Create</a></li>
        <li><a href="read.php">Read</a></li>
        <li><a href="update.php">Update</a></li>
        <li><a href="delete.php">Delete</a></li>
    </ul>
    <div class="container-table">
        <table border="1" class="table">
            <thead class="table-header">
                <tr>
                <th align="center">No</th>
                <th align="center">ID</th>
                <th align="center">Nama lengkap</th>
                <th align="center">Kelas</th>
                <th align="center">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "read/read_data.php"; 
                $i=1;
                foreach($result as $r) {?>            
                <tr>
                    <td align="center"><?php echo $i++ ?></td>
                    <td align="center"><?= $r['id']?></td>
                    <td align="center"><?= $r['nama_lengkap']?></td>
                    <td align="center"><?= $r['kelas']?></td>
                    <td align="center"><?= $r['jurusan']?></td>
                </tr>
            </tbody>
            <?php }
            ?>
        </table>
    </div>
</body>

</html>