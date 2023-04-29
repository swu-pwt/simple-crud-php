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
    <form action="edit-action.php?id=<?php echo $_GET['id'] ?>" method="post">
        <div class="container mt-5">
            <a href="index.php">< Kembali</a>
            <h1>Edit Data</h1>

            <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $query = mysqli_query($koneksi, "SELECT * FROM book where id = $id");

                while($data = mysqli_fetch_array($query)) {                
            ?>

            <div class="col-6 mt-3">
                <div class="form-group">
                    <input class="form-control" value=<?php echo $data['book_name'] ?> type="text" placeholder="Masukan Nama Buku" name="book_name">
                </div>
                <div class="form-group">
                    <input class="form-control" value=<?php echo $data['author'] ?> type="text" placeholder="Masukan Author" name="author">
                </div>
                <div class="form-group">
                    <input class="form-control" value=<?php echo $data['pages'] ?> type="text" placeholder="Masukan Jumlah Buku" name="pages">
                </div>

                <input type="submit" value="Edit" class="btn btn-success">
            </div>
            <?php } ?>
        </div>
    </form>
</body>
</html>