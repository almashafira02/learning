<?php

$host   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'fast_learn';

$link   = mysqli_connect($host,$user,$pass,$db);

// check koneksi
if(!$link){
    die("Connection Failed: ".mysqli_connect_error());
    // printf("Connection failed: %s\n", mysqli_connect_error());
    // exit();
}

echo "Connection successfully";