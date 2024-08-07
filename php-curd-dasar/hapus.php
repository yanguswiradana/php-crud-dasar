<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE nis=$id";
mysqli_query($koneksi, $query);

mysqli_close($koneksi);

header("Location: index.php");