<?php
include_once('koneksi.php');

// tangkap dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$kategori = $_POST['kategori'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];
$unit_kerja_id = $_POST['unit_kerja_id'];

// buat query insert
$query = "INSERT INTO paramedik (id, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES ('$id', '$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat', '$unit_kerja_id')";

// eksekusi query 
if ($dbh->query($query)) {
    header('Location: paramedik.php');
} else {
    echo "Gagal Menyimpan Data";
}
