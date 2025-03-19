<?php
include "connect.php";


$id = $_GET['id'];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$agama = $_POST["agama"];
$sekolah_asal = $_POST["sekolah_asal"];


$sql = mysqli_query ($koneksi, "UPDATE calon_siswa SET
nama = '$nama',
alamat = '$alamat',
jenis_kelamin = '$jenis_kelamin',
agama = '$agama',
sekolah_asal = '$sekolah_asal'
WHERE id = '$id';
");

if ($sql) {
    header("Location: ../list-siswa.php?msg=berhasil");
} else {
    header("Location: ../ubah.php?id=$id&msg=gagal");
}
?>