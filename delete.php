<?php
    include "koneksi.php";
    $id = $_GET['id'];

    $query = "DELETE FROM book where id = $id";

    mysqli_query($koneksi, $query);
    echo '<script>
    alert("Data berhasil dihapus");
    location="index.php?"
    </script>';

?>