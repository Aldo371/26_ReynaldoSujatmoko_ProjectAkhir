<?php
// koneksi database
include 'koneksi.php';

// menangkapdata yang di kirim dari form
$id = $_POST['id'];
$nm = $_POST['fullname'];
$fc = $_POST['kd'];
$dt = $_POST['dt'];
$o = $_POST['origin'];
$a = $_POST['arrival'];
$dur = $_POST['dur'];
$num = $_POST['sn'];


// update data ke database
mysqli_query($koneksi,"update input set fullname='$nm', kd='$fc', dt='$dt', origin='$o', arrival='$a', dur='$dur', sn='$num' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:output.php");

?>