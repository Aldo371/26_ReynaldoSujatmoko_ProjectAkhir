<?php

$koneksi = mysqli_connect("localhost","root","mysql","penerbangan");
// connection established (no echo to avoid sending output before headers)

//cek koneksi
if(mysqli_connect_error()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>