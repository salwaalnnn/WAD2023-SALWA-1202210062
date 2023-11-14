<?php

    include('config.php');
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    $query =  mysqli_query($connect, "INSERT INTO pengguna(nama, email, deskripsi)
                                     VALUES('$nama', '$email', '$deskripsi')");
    
    if ($query){
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    } else {
        echo "
        <script>alert('Gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }
?>