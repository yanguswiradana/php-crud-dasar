<?php
include 'koneksi.php';

$id_kelas = $_POST['id_kelas'];
$nama_siswa = $_POST['nama_siswa'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "INSERT INTO siswa (id_kelas, nama_siswa, jenis_kelamin) VALUES ('$id_kelas', '$nama_siswa', '$jenis_kelamin')";
mysqli_query($koneksi, $query);

mysqli_close($koneksi);

header("Location: index.php");
