<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$id_kelas = $_POST['id_kelas'];

$query = "UPDATE siswa SET nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', id_kelas='$id_kelas' WHERE nis=$id";
mysqli_query($koneksi, $query);

mysqli_close($koneksi);

header("Location: index.php");