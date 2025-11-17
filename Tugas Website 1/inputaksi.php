<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nm = $_POST['fullname'];
$fc = $_POST['kd'];
$dt = $_POST['dt'];
$o = $_POST['origin'];
$a = $_POST['arrival'];
$dur = $_POST['dur'];
$num = $_POST['sn'];


//menginput data ke database
mysqli_query($koneksi, "INSERT INTO input VALUES ('$id','$nm', '$fc', '$dt', '$o', '$a','$dur','$num')");

//mengalihkan halaman kembali ke index.php
header("location:output.php");

?>