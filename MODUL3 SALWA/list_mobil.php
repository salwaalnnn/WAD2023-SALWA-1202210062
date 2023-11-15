<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");
            
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            ?>
            <div class="container mt-5" style="width:50%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Harga Mobil</th>
                    <th scope="col">Detail Mobil</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            if($query){
                while($selects = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <th scope="row"><?= $selects['id']?></th>
            <td><?=$selects['nama_mobil']?></td>
            <td><?=$selects['brand_mobil']?></td>
            <td><?=$selects['warna_mobil']?></td>
            <td><?=$selects['tipe_mobil']?></td>
            <td><?=$selects['harga_mobil']?></td>
            <td><a href="form_detail_mobil.php?id='. $selects['id'].'"class="btn btn-primary">detail_mobil</a></td>
        </tr>
                <?php
                }
            }
                    

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->
                else{
                    echo "tidak ada data dalam tabel";
                }
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
