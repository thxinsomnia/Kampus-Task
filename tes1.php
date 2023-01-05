<?php
$hostname="localhost";
$username="root";
$password=" ";
$database="db_kampus";
$koneksi= mysqli_connect($hostname,$username,$password) or die ("koneksi ke mysql GAGAl");
mysqli_select_db($mysqli,$database,$koneksi) or die ("koneksi kek database gagal");
?>