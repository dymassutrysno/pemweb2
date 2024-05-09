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

$query = "INSERT INTO paramedik (id, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_id_kerja) VALUES ('$id','$nama', '$gender','$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat', '$unit_id_kerja')";




if ($dbh->query($query)) {
    header("Location: paramedik.php");
} else{
    echo"Gagal menyimpan data";
}