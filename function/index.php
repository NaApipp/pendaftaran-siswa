<?php
include 'connect.php';

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$agama = $_POST["agama"];
$sekolah_asal = $_POST["sekolah_asal"];


$query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
          VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

$result = mysqli_query($koneksi, $query);
if(!$result){
    die("Query Eror:".mysqli_error($koneksi));
} else {
    echo "data berhasil dimasukkan ke database";
}
header("location: ../index.html"); 
?>