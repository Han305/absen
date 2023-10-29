<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$tgl = $_POST['tgl'];

$sql = "INSERT INTO data (nama, nis, kelas, tgl) VALUES ('$nama', '$nis', '$kelas', '$tgl')";

if ($conn->query($sql)) {
    header("Location: berhasil.php?data-disimpan");
} else {
    echo "Data gagal disimpan";
}