<!DOCTYPE html>
<html>

<head>
   <title>Tabel CRUD</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
   <h1>Data Siswa</h1>
   <a href="tambah.php" class="tambah-button">Tambah Siswa</a>
   <table>
      <thead>
         <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>kelas</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         // Include your database connection
         include 'koneksi.php';

         // Retrieve data from the database
         $query = "SELECT * FROM siswa 
          JOIN kelas ON siswa.id_kelas = kelas.id_kelas
          order by siswa.nis asc
          ";

         $result = mysqli_query($koneksi, $query);

         while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['nis']}</td>";
            echo "<td>{$row['nama_siswa']}</td>";
            echo "<td>{$row['jenis_kelamin']}</td>";
            echo "<td>{$row['nama_kelas']}</td>";
            echo "<td>
                <a class='edit-button' href='edit.php?id={$row['nis']}'>Edit</a>
                <a class='delete-button' href='hapus.php?id={$row['nis']}'>Hapus</a>
            </td>";
            echo "</tr>";
         }

         // Close the database connection
         mysqli_close($koneksi);
         ?>
      </tbody>

   </table>
</body>

</html>