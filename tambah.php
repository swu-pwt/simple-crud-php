<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form action="tambah-action.php" method="post">
        <div class="container mt-5">
            <a href="index.php">< Kembali</a>
            <h1>Tambah Data</h1>

            <div class="col-6 mt-3">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Masukan Nama Buku" name="book_name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Masukan Author" name="author">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Masukan Jumlah Buku" name="pages">
                </div>

                <input type="submit" value="Submit" class="btn btn-success">
            </div>
        </div>
    </form>
</body>
</html>