<?php

$server		= "localhost";
$username	= "root";
$pass		= "";
$db			= "db_crud"; //sesuaikan nama databasenya
$koneksi = mysqli_connect($server, $username, $pass, $db); //pastikan urutan pemanggilan variable nya sama.

//untuk cek jika koneksi gagal ke database
if(!$koneksi){
	echo  "koneksi gagal : ".mysqli_connect_error();
}	
?>