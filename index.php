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
    <div class="container">
        <h2 class="mt-5 text-center">Book Management</h2>
        <a href="tambah.php"><button class="btn btn-success">Add Data</button></a>
        <table class="table table-striped mt-2">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Nama Buku</th>
                    <th>Author</th>
                    <th>Jumlah Halaman</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include "koneksi.php";
                
                $query = mysqli_query($koneksi, "SELECT * FROM book");

                while($data = mysqli_fetch_array($query)) {                
                ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['book_name'] ?></td>
                    <td><?php echo $data['author'] ?></td>
                    <td><?php echo $data['pages'] ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $data['id'] ?>"><button class="btn btn-danger">HAPUS</button></a>
                        <a href="edit.php?id=<?php echo $data['id'] ?>"><button class="btn btn-warning">EDIT</button></a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>