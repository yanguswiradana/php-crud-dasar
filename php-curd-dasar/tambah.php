<!DOCTYPE html>
<html>

<head>
   <title>Tambah Siswa</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <h1>Tambah Siswa</h1>
   <form action="proses_tambah.php" method="POST">
      <label for="nama_siswa">Nama Siswa:</label>
      <input type="text" name="nama_siswa" required><br>
      <label for="nama_siswa">Kelas</label>
      <input type="text" name="id_kelas" required><br>

      <label for="jenis_kelamin">Jenis Kelamin:</label>
      <input type="radio" name="jenis_kelamin" value="L" required> Laki-laki
      <input type="radio" name="jenis_kelamin" value="P" required> Perempuan<br>

      <input type="submit" value="Tambah">
   </form>
</body>

</html>