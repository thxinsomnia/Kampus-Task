<?php
// koneksi database
include_once("koneksi.php");
 
// hapus user id
$id = $_GET['id'];
 
// ngehapus tabel database
$result = mysqli_query($mysqli, "DELETE FROM nama WHERE id=$id");
 
// otomatis balik ke home
header("Location:index.php");
