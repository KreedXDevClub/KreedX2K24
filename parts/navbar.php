<body>

    <!-- Menu Toggle Button -->
    <div class="menu-toggle col-12 d-flex justify-content-center" onclick="toggleMenu()">
        <h5 id="toggleText" style="color: rgb(92, 39, 39); font-weight: bold; cursor: pointer;">Menu here</h5>

    </div>

    <!-- Full-Screen Overlay Menu -->
    <div class="menu-overlay">
        <!-- Background Gradient and Floating Particles -->
        <div class="background-gradient"></div>
        <div class="floating-particles"></div>

        <div class="menu-content">
            <!-- KreedX Title with 3D Rotating "X" -->
            <h1 class="menu-title">
                <img src="./logo/main2.png" alt="">
            </h1>

            <!-- Horizontal Navigation Links with Square Background Images -->
            <ul class="menu-links d-flex flex-wrap justify-content-center">
                <li><a href="#" data-image="images/aboutus.jpg">About US</a></li>
                <li><a href="#" data-image="images/portfolio.jpg">Portfolio</a></li>
                <li><a href="https://education.kreedx.com/" data-image="images/edux.jpg">EduX</a></li>
                <li><a href="#" data-image="images/blogx.jpg">BlogX</a></li>
                <li><a href="./galleX.php" data-image="images/gallex.jpg">GalleX</a></li>
                <li><a href="#sec4" data-image="images/contactx.jpg">Contact</a></li>

            </ul>
        </div>
    </div>

    <script>
        document.getElementById("toggleText").addEventListener("click", function() {
            const textElement = this;

            // Toggle the text content
            if (textElement.innerHTML.trim() === "Menu here") {
                textElement.innerHTML = "Go back";
            } else {
                textElement.innerHTML = "Menu here";
            }

            // Add the animation class
            textElement.classList.add("fade-in-out");

            // Remove the animation class after the animation ends to reset it
            textElement.addEventListener("animationend", () => {
                textElement.classList.remove("fade-in-out");
            }, {
                once: true
            });
        });
    </script>

</body>