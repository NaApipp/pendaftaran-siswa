<?php
include "function\connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Kendal | List Siswa</title>

    <!--Link To Icon Favicon-->
    <link rel="shortcut icon" href="asset/image/logo/logo skanipret.png" type="image/x-icon">

    <!--Link To Default CSS-->
    <link rel="stylesheet" href="asset/css/style.css">

    <!--Link To List CSS-->
    <link rel="stylesheet" href="asset/css/list.css">

</head>
<body>

      <!-- NAVBAR START -->
      <nav>
        <div class="logo">
          <a href="#home"><img src="asset/image/logo/logo skanipret.png" alt="logo" /></a>
          <a href="#home" style="text-decoration: none;"><h1>SMKN 4 KENDAL</h1></a>
        </div>
        <ul>
          <li>
            <a class="scroll-page" href="index.html#home">Home</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#sejarah">Sejarah</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#berita">Berita Skanifo</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#prestasi">Prestasi</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#gallery">Gallery</a>
          </li>
          <li>
            <a class="contact" href="daftar.html" target="_blank">Daftar!!</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </nav>
      <div class="menubar">
      <ul>
          <li>
            <a class="scroll-page" href="index.html#home">Home</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#sejarah">Sejarah</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#berita">Berita Skanifo</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#prestasi">Prestasi</a>
          </li>
          <li>
            <a class="scroll-page" href="index.html#gallery">Gallery</a>
          </li>
          <li>
            <a class="contact" href="daftar.html" target="_blank">Daftar!!</a>
          </li>
        </ul>
      </div>
      <!-- NAVBAR ENDS -->


      <!-- Section List -->
      <section id=list>
        <div class="content-list">
            <h3>Siswa Yang Sudah Mendaftar</h3>
    <center>
    <table border="1" width="100%x" padding="10px">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Sekolah Asal</td>
                <td>Tindakan</td>
            </tr>
        </thead>
        
        <tbody>
            <?php 
            // Buat koneksi ke database
            $database = mysqli_connect("localhost", "root", "", "db_pendaftaransiswa");
           // Jalankan query
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($database, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo"<tr>";
                    echo"<td>".$siswa['id']."</td>";
                    echo"<td>".$siswa['nama']."</td>";
                    echo"<td>".$siswa['alamat']."</td>";
                    echo"<td>".$siswa['jenis_kelamin']."</td>";
                    echo"<td>".$siswa['agama']."</td>";
                    echo"<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td>";
                    echo "<a href='ubah.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='function/delete.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
    </table>
    </center>
    </div>
    </section>

    <!-- Footer -->
    <footer>
  <p>
    &copy; 2025 GDG Semarang Team. All Rights Reserved.<br />
    Powered by <a class="credits" href="https://superappsporto.vercel.app/" target="_blank">SuperApps</a>
  </p>
</footer>

      <!-- Link To JavaScript -->
      <script src="asset\JavaScript\script.js"></script>
</body>
</html>