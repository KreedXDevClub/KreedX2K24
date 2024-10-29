<head>
    <style>
        /* Navbar background gradient */

        .navbar{
            z-index: 1;
        }

        .navlogo {
            cursor: pointer;
            transition: transform 0.3s ease, filter 0.3s ease;
        }
        .navlogo:hover {
            transform: scale(1.05);
            /* Slightly enlarges the image on hover */
            filter: drop-shadow(10px 10px 15px rgba(0, 0, 0, 0.3));
            /* Adds shadow directly to the image */
        }
        .navbar-custom {
            background: transparent;
            position: fixed;
            width: 100vw;
        }

        /* Navbar text styling */
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
            margin-right: 20px;
        }

        /* Logo styling */
        .navbar-brand img {
            height: 40px;
        }

        /* Hover effect */
        .navbar-nav .nav-link:hover {
            color: #ccc !important;
        }

        /* Full-screen content */
        .full-screen-center {
            min-height: 100vh;
        }
    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-custom p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo/main2.png" class="navlogo" alt="Logo" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sec1">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sec2">EduX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sec3">BlogX</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sec4">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>