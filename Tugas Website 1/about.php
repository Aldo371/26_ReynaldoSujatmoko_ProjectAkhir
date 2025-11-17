<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOVARA AIRLINES </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css">
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
                <li><a href="index.php" class="nav-item">         Landing Page    </a></li>
                <li> | </li>
                <li><a href="about.php" class="nav-item active">  About Us        </a></li>
            </ul>
            <a href="login.php"><button class="login-btn">        Log In          </button></a>
        </div>
    </nav>
    
    <main class="page-main">

    <section class="about">
  <div class="container">
    <div class="slider">
      <button class="arrow-left" aria-label="Previous">&lt;</button>
      <div class="frame">
        <div class="slides">
          <img src="img/slide1.jpg" class="slide active" alt="slide 1">
          <img src="img/slide2.jpg" class="slide" alt="slide 2">
          <img src="img/slide3.jpg" class="slide" alt="slide 3">
          <img src="img/slide4.jpg" class="slide" alt="slide 4">
        </div>
      </div>
      <button class="arrow-right" aria-label="Next">&gt;</button>
    </div>
    <div class="dots" aria-hidden="true"></div>
  </div>
</section>

    <!-- Three horizontal photos with right-side white info box -->
    <section class="photo-row">
      <div class="photo-card">
        <img src="img/abt1.jpg" alt="photo 1" class="photo-img">
        <div class="info-box">
          <h3 class="info-title">Luxury Cabin</h3>
          <p class="info-text">Experience comfort and style on our premier flights.</p>
        </div>
      </div>

      <div class="photo-card">
        <img src="img/abt2.jpg" alt="photo 2" class="photo-img">
        <div class="info-box">
          <h3 class="info-title"> Concierge Service </h3>
          <p class="info-text">From gourmet in-flight dining to luxury ground transportation.</p>
        </div>
      </div>

      <div class="photo-card">
        <img src="img/abt3.jpg" alt="photo 3" class="photo-img">
        <div class="info-box">
          <h3 class="info-title">World Destinations</h3>
          <p class="info-text">Fly to the most sought-after destinations worldwide.</p>
        </div>
      </div>
    </section>

    </main>

<!-- Three horizontal photos with right-side white info box -->
<section class="photo-row">
  <div class="photo-card">
    <img src="img/abt4.jpg" alt="photo 4" class="photo-img">
    <div class="info-box">
      <h3 class="info-title">Membership Programs</h3>
      <p class="info-text">Experience comfort and style on our premier flights.</p>
    </div>
  </div>

  <div class="photo-card">
    <img src="img/abt5.jpg" alt="photo 5" class="photo-img">
    <div class="info-box">
      <h3 class="info-title">Premium Service</h3>
      <p class="info-text">Enjoy priority access, exclusive rates, and personalized service with our membership plans.</p>
    </div>
  </div>

  <div class="photo-card">
    <img src="img/abt6.jpg" alt="photo 6" class="photo-img">
    <div class="info-box">
      <h3 class="info-title">Top Safety Standards</h3>
      <p class="info-text">Safety and security are our top priorities.</p>
    </div>
  </div>
</section>


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

    <script>
    // Lightweight slider: arrows + dots navigation
    (function(){
      const slides = Array.from(document.querySelectorAll('.slide'));
      const dotsContainer = document.querySelector('.dots');
      const prev = document.querySelector('.arrow-left');
      const next = document.querySelector('.arrow-right');
      if (!slides.length) return;
      // create dots dynamically to match slides
      dotsContainer.innerHTML = '';
      slides.forEach((s, i) => {
        const sp = document.createElement('span');
        sp.className = 'dot' + (s.classList.contains('active') ? ' active' : '');
        sp.setAttribute('data-idx', i);
        dotsContainer.appendChild(sp);
      });
      const dots = Array.from(dotsContainer.querySelectorAll('.dot'));

      let idx = slides.findIndex(s => s.classList.contains('active'));
      if (idx < 0) idx = 0, slides[0].classList.add('active');

      function show(n){
        slides[idx].classList.remove('active');
        if (dots[idx]) dots[idx].classList.remove('active');
        idx = (n + slides.length) % slides.length;
        slides[idx].classList.add('active');
        if (dots[idx]) dots[idx].classList.add('active');
      }

      prev && prev.addEventListener('click', ()=> show(idx-1));
      next && next.addEventListener('click', ()=> show(idx+1));
      dots.forEach((d,i)=> d.addEventListener('click', ()=> show(i)));
    })();
    </script>
</body>
</html>