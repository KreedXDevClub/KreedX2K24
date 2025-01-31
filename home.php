<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Three.js GLB Model</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body class="m-0 p-0">
  <div class="col-12">
    <?php
    include "parts/navbar.php"
    ?>
  </div>

  <!-- Main Section -->
  <section id="Home" class="section">
    <div class="col-12 row m-0 p-0">
      <div class="col-12 m-0 p-0 d-flex justify-content-center align-items-center vh-100 row">
        <div class="col-12 welcomeX d-flex justify-content-center">
          <h1 class="fontX animate__animated animate__fadeInDown">WELCOME TO</h1>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center logoX">
          <img src="logo/main2.png" class="logoX col-lg-6 col-10 animate__animated animate__fadeInUp animate__delay-3s" />
        </div>
        <div class="animate__animated animate__fadeIn animate__delay-2s col-12 d-flex justify-content-center align-items-center" style="z-index: -1;">
          <div id="scene-container" class></div>
        </div>
      </div>
    </div>
  </section>


  <div class="col-12 row m-0 p-0 d-none mobileX vh-100">

    
  </div>

  <!-- Horizontal Scroll Container -->
  <div class="horizontal-sections">

    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
        <div class="col-12 justify-content-center aling-items-center d-flex">
        <h1 class=" wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay="1s" style="color: white; font-weight: bold; font-size: 200px;">ABOTU US</h1>
        </div>
        <div class="col-12 justify-content-center aling-items-center d-flex" >
        <img src="logo/main2.png" class="fs1 wow animate__animated animate__bounceInUp " data-wow-duration="2s" data-wow-delay="1s" />
        </div>
        </div>
        
      </div>
    </section>


    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
        <div class="col-12 justify-content-center aling-items-center d-flex">
        <h1 class=" wow animate__animated animate__fadeInDown" data-wow-duration="2s" data-wow-delay="1s" style="color: white; font-weight: bold; font-size: 200px;">ABOTU US</h1>
        </div>
        <div class="col-12 justify-content-center aling-items-center d-flex" >
        <img src="logo/main2.png" class="fs1 wow animate__animated animate__bounceInUp " data-wow-duration="2s" data-wow-delay="1s" />
        </div>
        </div>
        
      </div>
    </section>

    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s" >It's worked</h1>
      </div>
    </section>

    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s" >It's worked</h1>
      </div>
    </section>

    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s" >It's worked</h1>
      </div>
    </section>

    <section class="section horizontal-section">
      <div class="col-12  vh-100 d-flex justify-content-center align-items-center">
        <h1 class="fs1 text-centerwow animate__animated animate__bounceInUp" data-wow-duration="2s" data-wow-delay="1s" >It's worked</h1>
      </div>
    </section>
  </div>

  

  <!-- GSAP and Three.js CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="script.js"></script>

  <!-- GSAP Script for Horizontal Scroll -->
  <script>
    new WOW().init();

    gsap.registerPlugin(ScrollTrigger);

    // Check if the screen width is above a certain threshold (e.g., 768px)
    if (window.innerWidth > 768) {
      // Create the horizontal scroll animation for larger screens
      gsap.to(".horizontal-sections", {
        x: () => -(document.querySelector(".horizontal-sections").offsetWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
          trigger: ".horizontal-sections",
          start: "top top",
          end: () => `+=${document.querySelector(".horizontal-sections").offsetWidth - window.innerWidth}`,
          scrub: 1,
          pin: true,
          anticipatePin: 1,
          invalidateOnRefresh: true,
        }
      });
    }
  </script>
</body>

</html>