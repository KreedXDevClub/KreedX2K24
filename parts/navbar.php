<head>
    <style>
        /* Navbar background gradient */


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
            <img src="logo/main2.png" alt="Logo" />
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
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edu x</a>
                </li>
            </ul>
        </div>
    </div>
</nav>