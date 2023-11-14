<?php
    include('config.php')
?>

<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 3 Latihan</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-EVTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="width:50%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($connect, "SELECT * FROM pengguna");
                    if($query){
                        while($selects = mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <th scope="row"><?= $selects['id']?></th>
                    <td><?=$selects['nama']?></td>
                    <td><?=$selects['email']?></td>
                    <td><?=$selects['deskripsi']?></td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    <div>
</body>
</html>