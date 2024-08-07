<!DOCTYPE html>
<html>

<head>
   <title>Edit Siswa</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <h1>Edit Siswa</h1>
   <?php
   include 'koneksi.php';

   $id = $_GET['id'];
   $query = "SELECT * FROM siswa WHERE nis = $id";
   $result = mysqli_query($koneksi, $query);
   $row = mysqli_fetch_assoc($result);
   ?>
   <form action="proses_edit.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row['nis']; ?>">
      <label for="nama_siswa">Nama Siswa:</label>
      <input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" required><br>
      <label for="nama_siswa">Kelas:</label>
      <input type="text" name="id_kelas" value="<?php echo $row['id_kelas']; ?>" required><br>

      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki"
         <?php echo ($row['jenis_kelamin'] == 'Laki-Laki') ? 'checked' : ''; ?> required> Laki-laki
      <input type="radio" name="jenis_kelamin" value="Perempuan"
         <?php echo ($row['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?> required> Perempuan<br>

      <input type="submit" value="Simpan" style="background-color: blue;">
   </form>
</body>

</html>