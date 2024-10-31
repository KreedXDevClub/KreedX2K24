<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Three.js GLB Model</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="m-0 p-0">

  <!-- Loading Screen with Custom Loader -->
  <div id="loading-screen">
    <span class="loader"></span>
  </div>

  <div class="col-12 navbarPCM" style="z-index: 1;">
    <?php
    include "parts/mobileNav.php"
    ?>
  </div>

  <!-- Main Section -->
  <section id="sec" class="section">

    <div class="col-12 navbarPC">
      <?php
      include "parts/navbar.php"
      ?>
    </div>

    <div class="col-12 row m-0 p-0">
      <div class="col-12 m-0 p-0 d-flex justify-content-center align-items-center vh-100 row">
        <div class="col-12 welcomeX d-flex justify-content-center">
          <h1 class="fontX animate__animated animate__fadeInDown" id="welcome">WELCOME TO</h1>
        </div>
        <div class="col-12 welcomeX2 d-flex justify-content-center">
          <h1 class="fontX3 text-center animate__animated animate__fadeInDown p-3" id="welcome">Your Gateway to
            Innovative Web Development and Software Solutions</h1>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center logoX">
          <img src="logo/main2.png" class="logoX logoX2 col-lg-6 col-10 wow animate__animated animate__fadeInUp"
            data-wow-delay="1.4s" />
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center wow animate__animated animate__fadeIn"
          data-wow-delay="1.1s" style="z-index: -1;">
          <div id="scene-container" class></div>
        </div>
      </div>
    </div>
    <div class="col-12 vh-100 divX d-flex justify-content-center align-items-center">

      <h1 class="col-12 text-center fs-1" style="color:white;">About Us</h1>

    </div>
  </section>

  <div class="col-12 m-0 p-0 mobileX">

    <section class="col-12 p-0 mobileXB" id="sec1">
      <div class="col-12 mobileX1 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-center wow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s"
          style="color: white;">Portfolio</h1>
      </div>
    </section>

    <section class="col-12 p-0 mobileXB" id="sec2">
      <div class="col-12 mobileX1 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-center wow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s"
          style="color: white;">EduX</h1>
      </div>
    </section>

    <section class="col-12 p-0 mobileXB" id="sec3">
      <div class="col-12 mobileX1 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s"
          style="color: white;">BlogX</h1>
      </div>
    </section>

    <section class="col-12 p-0 mobileXB" id="sec4">
      <div class="col-12 mobileX1 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s"
          style="color: white;">Contact Us</h1>
      </div>
    </section>

  </div>

  <div class="horizonX">

    <div class="horizontal-sections divX2">

      <section id="sec1" class="section horizontal-section">
        <div class="col-12    vh-100 d-flex justify-content-center align-items-center">
          <h1 class="fs1 text-center wow animate__animated animate__bounceInUp" data-wow-duration="2s"
            data-wow-delay="1s" style="color: white;">Portfolio</h1>
        </div>
      </section>

      <section id="sec2" class="section horizontal-section">
        <div class="col-12    vh-100 d-flex justify-content-center align-items-center">
          <h1 class="fs1 text-center wow animate__animated animate__bounceInUp" data-wow-duration="2s"
            data-wow-delay="1s" style="color: white;">EduX</h1>
        </div>
      </section>

      <section id="sec3" class="section horizontal-section">
        <div class="col-12    vh-100 d-flex justify-content-center align-items-center">
          <h1 class="fs1 text-center wow animate__animated animate__bounceInUp" data-wow-duration="2s"
            data-wow-delay="1s" style="color: white;">BlogX</h1>
        </div>
      </section>

    </div>

    <section id="sec4" class="bottomX">
      <div class="col-12    vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-center" style="color: white;">Contact Us</h1>
      </div>
    </section>

    <section id="sec5" class="bottomX">
      <div class="col-12    vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-center" style="color: white;">Footer</h1>
      </div>
    </section>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="script.js"></script>

</body>

</html>