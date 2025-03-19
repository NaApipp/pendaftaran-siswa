<?php
include "connect.php";

$id = $_GET['id'];
$sql = mysqli_query($koneksi, "DELETE FROM calon_siswa WHERE id = '$id'");

if ($sql) {
    header("Location: ../list-siswa.php?msg=berhasil");
} else {
    header("Location: ../list-siswa.php?msg=gagal");
}
?>