<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM barang WHERE id = '$id'")or die (mysqli_error($koneksi));

header("location:index.php?pesan=hapus");
?>
