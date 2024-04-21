<?php
include_once('koneksi.php');

$id = $_POST["id"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$tmp_lahir = $_POST["tmp_lahir"];
$tgl_lahir = $_POST["tgl_lahir"];
$kategori = $_POST["kategori"];
$telpon = $_POST["telpon"];
$alamat = $_POST["alamat"];
$unit_id_kerja = $_POST["unit_id_kerja"];

$query = "UPDATE paramedik SET id='$id', nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat', unit_id_kerja='$unit_id_kerja' WHERE id='$id'";



if ($dbh->query($query)) {
    header("Location: paramedik.php");
} else{
    echo"Gagal menyimpan data";
}