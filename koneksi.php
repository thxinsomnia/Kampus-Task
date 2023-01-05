<?php
/**
 * koneksi mysql ke database
 */
 
$databaseHost = 'localhost';
$databaseName = 'db_kampus';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
