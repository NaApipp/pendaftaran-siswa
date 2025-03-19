<?php
include "function/connect.php";

$id = $_GET['id'];

$get_data = mysqli_query($koneksi, "SELECT * FROM calon_siswa WHERE id='$id'");
$row_data = mysqli_fetch_array($get_data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Kendal | Update Data</title>

    
    <!--Link To Default CSS-->
    <link rel="stylesheet" href="asset/css/style.css">
    
    <!--Link To Default CSS-->
    <link rel="stylesheet" href="asset\css\ubah.css">

    <!--Link To Icon Favicon-->
    <link rel="shortcut icon" href="asset/image/logo/logo skanipret.png" type="image/x-icon">

</head>
<style>
    .form-group{
        width: 1000px;
    }
</style>
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


      <!-- Section Form -->
        <section id="form">
    <div class="form">
        <div class="login">
    <div class="hader">
      <span style="padding-top: px;">Perbarui Diri Anda di Form Ini</span>
      <p>Untuk Memperbarui Data Siswa</p>
    </div>
        <form action="function\edit.php?id=<?=$id?>" method="POST">
            <!--Script Update Nama Siswa-->
                <label for="nama">Nama:</label>
                <input type="text" class="form-control"  placeholder="Enter Nama Terbaru" name="nama" value="<?= $row_data['nama']?>">
          
            <!--Script Update Alamat Siswa-->
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control"  placeholder="Enter Alamat Terbaru" name="alamat" value="<?= $row_data['alamat']?>">
            
            <!--Script Update Jenis Kelamin Siswa-->
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" class="form-control"  placeholder="Enter Jenis Kelamin Terbaru" name="jenis_kelamin" value="<?= $row_data['jenis_kelamin']?>">
            
            <!--Script Update Agama Siswa-->
                <label for="agama">Agama:</label>
                <input type="text" class="form-control"  placeholder="Enter Agama Terbaru" name="agama" value="<?= $row_data['agama']?>">
          
            <!--Script Update Sekolah Asal Siswa-->
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" class="form-control"  placeholder="Enter Sekolah Asal Terbaru" name="sekolah_asal" value="<?= $row_data['sekolah_asal']?>">
            
            <br><br>
            <!--Button Update Data dan Kembali Ke Daftar Siswa-->
            <div class="btn">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="list-siswa.php"><button class="btn btn-primary">Kembali</button></a>
            </div>
        </form>
        </div>
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