<!DOCTYPE html>
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
        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    Nama
                </label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    Email
                </label>
                <input type="email" class="form-control" placeholder="nama@example.com" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextArea1" class="form-label">
                    Deskripsi
                </label>
                <textarea class="form-control" rows="3" name="deskripsi">

                </textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
        </form>
    </div>
</body>
</html>