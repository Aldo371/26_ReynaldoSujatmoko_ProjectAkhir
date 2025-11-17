<?php
session_start();//
include 'koneksi.php';//


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM account WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        header("Location: input.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
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
<body>
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
            <h1 class="page-title">Welcome Back</h1>
        </div>

        <div class="form-container">
            <h1>LOGIN</h1>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" name="login" class="form-button">Login</button>
                <div class="form-link">
                    <p>Don't have an account? <a href="register.php">Sign up here</a></p>
                </div>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-column">
                <h3> CREATOR'S INFO </h3>
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