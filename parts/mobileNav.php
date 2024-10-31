<head>
    <style>
        /* RESET/BASIC STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

        :root {
            --white: #ffffff;
            --light-grey: #801c1c;
            --violet: #400000;
            --dark-violet: #030000;
            --bright: #ffffff;
        }


        ul {
            list-style: none;
        }

        a {
            color: var(--white);
            text-decoration: none;
        }

        /* MAIN STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .nav {
            position: fixed;
            display: flex;
            justify-content: center;
        }

        .nav [type="checkbox"] {
            position: absolute;
            left: -9999px;
        }

        .nav [type="checkbox"]+label {
            position: relative;
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            cursor: pointer;
            z-index: 1;
            background: var(--violet);
            border-radius: 50%;
            transform: translateY(-50%);
            transition: all 0.2s;
        }

        .nav [type="checkbox"]+label:hover {
            background: var(--dark-violet);
        }

        .menu{
            display: flex;
            justify-content: center;
            position: absolute;
            width: 20px;
            color: white;
        }
        
        .menuText{
            color: white;
        }

        .menu li {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            transition: all 0.4s;
        }

        .menu li:nth-child(1) {
            transition-delay: 0.2s;
        }

        .menu li:nth-child(2) {
            transition-delay: 0.15s;
        }

        .menu li:nth-child(3) {
            transition-delay: 0.1s;
        }

        .menu li:nth-child(4) {
            transition-delay: 0.05s;
        }

        .menu li a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--violet);
        }

        .menu li a span {
            position: absolute;
            top: 0;
            left: 0;
            transform: translateY(calc(-100% - 5px));
            width: 100%;
            font-size: 13px;
            white-space: nowrap;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
            color: var(--black);
            font-weight: bold;
        }

        .nav input:checked+label {
            background: var(--black);
            transform: translateY(calc(-50% + 4px));
        }

        .nav input:checked~.menu li:nth-child(1) {

            top: -210px;
            transition-delay: 0.1s;
        }

        .nav input:checked~.menu li:nth-child(2) {
            top: -160px;
            left: calc(50% - 75px);
            transition-delay: 0.2s;
        }

        .nav input:checked~.menu li:nth-child(3) {
            top: -160px;
            left: calc(50% + 75px);
            transition-delay: 0.3s;
        }

        .nav input:checked~.menu li:nth-child(4) {
            top: -110px;
            transition-delay: 0.4s;
        }

        .nav input:checked~.menu li a span {
            opacity: 1;
            transition-delay: 0.9s;
        }
    </style>
</head>

<div class="col-12 m-0 p-0">

    <nav class="nav fixed-bottom">
        <input id="menu" type="checkbox">
        <label for="menu" class="menuText">Menu</label>
        <ul class="menu">
            <li>
                <a href="#0">
                    <span class="text-center">Portfolio</span>
                    <i class="bi bi-columns-gap"></i>
                </a>
            </li>
            <li>
                <a href="#0">
                    <span class="text-center">EduX</span>
                    <i class="bi bi-journal-bookmark-fill"></i>
                </a>
            </li>
            <li>
                <a href="#0">
                    <span class="text-center">BlogX</span>
                    <i class="bi bi-file-post-fill"></i>
                </a>
            </li>
            <li>
                <a href="#0">
                    <span class="text-center">Reach US</span>
                    <i class="bi bi-person-lines-fill"></i>
                </a>
            </li>

        </ul>
    </nav>

</div>