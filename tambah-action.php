<?php
    include "koneksi.php";

    $name = $_POST['book_name'];
    $author = $_POST['author'];
    $pages = $_POST['pages'];

    // var_dump($name);

    $query = "INSERT INTO book VALUES (NULL, '$name', '$author', '$pages')";

    mysqli_query($koneksi, $query);
    echo '<script>
    alert("Data Berhasil Disimpan");
    location="index.php?"
    </script>';

    // echo $name, $author, $pages;
?>