<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $name = $_POST['book_name'];
    $author = $_POST['author'];
    $pages = $_POST['pages'];

    $query = "UPDATE book SET book_name='$name', author='$author', pages='$pages' WHERE id='$id'";
    mysqli_query($koneksi, $query);
    echo '<script>
    alert("Data berhasil di update");
    location="index.php?"
    </script>';
?>