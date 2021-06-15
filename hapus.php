<?php
include "conn.php";
$id    = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "DELETE FROM data_file WHERE id='$id' ");
header('location:index.php?pesan=hapus-berhasil');
