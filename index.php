<?php

require_once "init.php";

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>

<h1>Halaman Profile</h1>
<p>Selamat datang, <?php echo ucwords($_SESSION['username'])?></p>

<a href="course.php">Course</a>
<a href="">Fakultas</a>
<a href="">Feed Back</a>
<a href="">Fakultas</a>
<a href="">Siswa</a>
<a href="">Study Center</a>
<a href="logout.php">Logout</a>