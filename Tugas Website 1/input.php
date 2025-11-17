<?php

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
    <nav class="navbar">
        <div class="logo">
            <img src="img/NovaraLogo.jpg" alt="Logo" class="logo-img">
            Novara Airlines
        </div>

        <div class="nav-right">
            <ul class="nav-links">
                <li><a href="index.php" class="nav-item">           Landing Page    </a></li>
                <li> | </li>
                <li><a href="input.php" class="nav-item active">    Input           </a></li>
                <li> | </li>
                <li><a href="output.php" class="nav-item">          Output          </a></li>
                <li> | </li>
                <li><a href="about.php" class="nav-item">           About Us        </a></li>
            </ul>
            <a href="index.php"><button class="login-btn">          Log Out         </button></a>
        </div>
    </nav>

    <div class="page-hero2">
        <h1 class="page-title">INPUT DATA</h1>
    </div>

        <main class="page-main">
            <section class="form-section">
                <div class="form-container">
                    <h1 class="form-title">Novara Airlines</h1>
                    <p class="form-sub">Insert Data</p>
                    <form method="post" action="inputaksi.php">
                        <div class="form-group">
                            <label>ID Number (10 Numbers)</label>
                            <input type="number" name="id" required>
                        </div>
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="fullname" required>
                        </div>
                        <div class="form-group">
                            <label>Flight Code</label>
                            <input type="text" name="kd" required>
                        </div>
                        <div class="form-group">
                            <label>Flight Date</label>
                            <input type="date" name="dt" required>
                        </div>
                        <div class="form-group">
                            <label>City Of Origin</label>
                            <input type="text" name="origin" required>
                        </div>
                        <div class="form-group">
                            <label>City Of Arrival</label>
                            <input type="text" name="arrival" required>
                        </div>
                        <div class="form-group">
                            <label>Flight Duration (hours)</label>
                            <input type="number" name="dur" min="0" step="0.2" required>
                        </div>
                        <div class="form-group">
                            <label>Seat Number</label>
                            <input type="text" name="sn" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-button">Save</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

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