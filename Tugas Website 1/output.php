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
    <link rel="icon" href="NovaraLogo.jpg" type="image/jpeg">
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
                <li><a href="input.php" class="nav-item">           Input           </a></li>
                <li> | </li>
                <li><a href="output.php" class="nav-item active">   Output          </a></li>
                <li> | </li>
                <li><a href="about.php" class="nav-item">           About Us        </a></li>
            </ul>
            <a href="index.php"><button class="login-btn">          Log Out         </button></a>
        </div>
    </nav>

    <div class="page-hero2">
        <h1 class="page-title">OUTPUT DATA</h1>
    </div>

        <main class="page-main">
            <section class="table-section">
                <div class="table-wrap">
                    <h1 class="table-title">Flight Data</h1>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Date</th>
                                <th>Origin</th>
                                <th>Arrival</th>
                                <th>Duration</th>
                                <th>Seat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'koneksi.php';
                            $no = 1;
                            $penerbangan = mysqli_query($koneksi,"select * from input");
                            while($p = mysqli_fetch_array($penerbangan)){
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $p['id']; ?></td>
                                <td><?php echo $p['fullname']; ?></td>
                                <td><?php echo $p['kd']; ?></td>
                                <td><?php echo $p['dt']; ?></td>
                                <td><?php echo $p['origin']; ?></td>
                                <td><?php echo $p['arrival']; ?></td>
                                <td><?php echo $p['dur']; ?></td>
                                <td><?php echo $p['sn']; ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $p['id']; ?>" style="text-decoration:none;">Update</a>
                                    &nbsp;|&nbsp;
                                    <a href="delete.php?id=<?php echo $p['id']; ?>" style="text-decoration:none;">Delete</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
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