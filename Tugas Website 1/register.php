<?php
include 'koneksi.php';
// Cek apakah form telah disubmit
if(isset($_POST['register'])){
    // Ambil data dari form
    $username = $_POST['username'];


    $nama = $_POST['nama']; // Menangkap nama lengkap dari form
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $email = $_POST['email']; // Menangkap email dari form
    $dob = $_POST['dob']; // Menangkap tanggal lahir dari form


    // Simpan data ke database
    $query = "INSERT INTO account (username, nama, password, email, dob) VALUES ('$username','$nama','$password','$email','$dob')";
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);


    // Cek apakah query berhasil
    if($result){
        // Redirect ke halaman login setelah registrasi sukses
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        // Tampilkan pesan error jika registrasi gagal
        echo "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOVARA AIRLINES </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="icon" href="img/NovaraLogo.jpg" type="image/jpeg">
</head>
<body style="height:1700px">
    <div class="page-container">
        <nav class="navbar">
            <div class="logo">
                <img src="img/NovaraLogo.jpg" alt="Logo" class="logo-img">
                Novara Airlines
            </div>
            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="index.php" class="nav-item">Landing Page</a></li>
                    <li> | </li>
                    <li><a href="about.php" class="nav-item">About Us</a></li>
                </ul>
                <a href="login.php"><button class="login-btn">Log In</button></a>
            </div>
        </nav>

        <div class="page-hero">
            <h1 class="page-title">Join Novara Airlines</h1>
        </div>

        <div class="form-container">
            <h1>SIGN UP</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="nama">Full Name</label>
                    <input type="text" id="nama" name="nama" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Choose a username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                </div>
                <button type="submit" name="register" class="form-button">Sign Up</button>
                <div class="form-link">
                    <p>Already have an account? <a href="login.php">Log in here</a></p>
                </div>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-column">
                <h3> CREATOR's INFO </h3>
                <ul>
                    <li>Reynaldo Sujatmoko</li>
                    <li>Class 12-3</a></li>
                    <li>Absent Number 26</li>
                    <li>Informatics Assesment</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>FOLLOW FOR MORE</h3>
                <ul>
                    <li><a href="https://www.instagram.com/just.aldoo/">Instagram</a></li>
                    <li><a href="https://github.com/Aldo371">GitHub</a></li>
                    <li><a href="https://open.spotify.com/">Spotify</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>CONTACT</h3>
                <p>2023070911@student.pppkpetra.sch.id</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>http://localhost/Tugas%20Website%201/index.php - Reynaldo Sujatmoko/XII-3/26</p>
            2025 @ All rights reserved.
        </div>
    </footer>
</body>
</html>