<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KreedX | GalleX</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<style>
		.minX {
			margin-left: 50px;
			font-size: 20px;
		}

		@media (max-width: 435px) {
			.minX {
				margin-left: 10%;
			}
		}

		@media (max-width: 365px) {
			.minX {
				margin-left: 10%;
			}
		}

		/* Lightbox Styles */
		.lightbox {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.8);
			align-items: center;
			justify-content: center;
			z-index: 1000;
		}

		.lightbox img {
			max-width: 90%;
			max-height: 90%;
			border-radius: 10px;
		}

		.lightbox-close {
			position: absolute;
			top: 20px;
			right: 20px;
			color: white;
			font-size: 24px;
			cursor: pointer;
			background-color: rgba(0, 0, 0, 0.6);
			padding: 5px 10px;
			border-radius: 5px;
			z-index: 1001;
			/* Ensure close button is on top */
		}
	</style>
	<script src="js/modernizr.custom.js"></script>
</head>

<body class="demo-1">

	<!-- Loading Screen with Custom Loader -->
	<div id="loading-screen">
		<span class="loader"></span>
	</div>

	<main>
		<div class="codrops-header">
			<h1>
				<a href="../home.php"><img class="logoX" src="../logo/main2.png" alt=""></a>
				<div class="minX">
					<p>Stories & Journey of Our Gallery</p>
				</div>
			</h1>
		</div>
		<div class="isolayer isolayer--scroll1 isolayer--shadow">
			<ul class="grid grid--effect-flip">

				<li class="grid__item">
					<a class="grid__link">

						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/image11.jpg" id="click1" onclick="openLightbox(this);  clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/image12.jpg" id="click1" onclick="openLightbox(this);  clickSound()" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/image13.jpg" id="click1" a onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>	
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/image14.jpg" id="click1" onclick="openLightbox(this);  clickSound()" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" alt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="01" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="021" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="03" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="042" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="011" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="02" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="031" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4.jpg" a id="click1" onclick="openLightbox(this); clickSound();" lt="04" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="012" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/2_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="022" />
						<span class="grid__title">Julien </span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/3_2.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="032" />
						<span class="grid__title">Mike | Creative Mints</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/1_3.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="013" />
						<span class="grid__title">Forefa</span>
					</a>
				</li>
				<li class="grid__item">
					<a class="grid__link">
						<img class="grid__img layer" src="img/canvas.png" alt="Canvas Dummy" />
						<img class="grid__img layer" src="img/wireframe.png" alt="Wireframe Dummy" />
						<img class="grid__img layer" style="cursor: pointer;" src="img/Dribbble1/4_1.jpg" id="click1" onclick="openLightbox(this); clickSound();" alt="041" />
						<span class="grid__title">Cosmin Capitanu</span>
					</a>
				</li>
			</ul>
		</div>
	</main>

	<audio id="sound1" src="sounds/click1.mp3"></audio>

	<!-- Lightbox Container -->
	<div class="lightbox" style="z-index: 9999;" id="lightbox">
		<span class="lightbox-close" style="cursor: pointer;" onclick="closeLightbox()">×</span>
		<img id="lightbox-img" src="" alt="Enlarged Image">
	</div>

	<a class="pater">
		<h2 class="pater__title" aria-label="KreedX Developer Club"><img src="../logo/main2.png" /></h2>
		<p class="pater__desc">Discover our journey through images that showcase our successes and stories. Each picture reflects our dedication and achievements.</p>
	</a>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/animOnScroll.js"></script>
	<script src="js/main.js"></script>
	<script>
		window.addEventListener("load", () => {
			document.getElementById("loading-screen").classList.add("hidden");
		});


		const audio1 = document.getElementById("sound1");

		function clickSound() {
			audio1.play();
		}

		// Open Lightbox
		function openLightbox(element) {
			const lightbox = document.getElementById("lightbox");
			const lightboxImg = document.getElementById("lightbox-img");

			lightboxImg.src = element.src;
			lightbox.style.display = "flex";
		}

		// Close Lightbox
		function closeLightbox() {
			const lightbox = document.getElementById("lightbox");
			lightbox.style.display = "none";
		}

		(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			[].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
				new IsoGrid(el, {
					type: 'scrollable',
					transform: 'translateX(-15vw) translateY(275px) rotateX(45deg) rotateZ(45deg)',
					stackItemsAnimation: {
						properties: function(pos) {
							return {
								translateZ: (pos + 1) * 50,
								rotateZ: getRandomInt(-3, 3)
							};
						},
						options: function(pos, itemstotal) {
							return {
								type: dynamics.bezier,
								duration: 500,
								points: [{
									"x": 0,
									"y": 0,
									"cp": [{
										"x": 0.2,
										"y": 1
									}]
								}, {
									"x": 1,
									"y": 1,
									"cp": [{
										"x": 0.3,
										"y": 1
									}]
								}],
							};
						}
					},
					onGridLoaded: function() {
						classie.add(document.body, 'grid-loaded');
					}
				});
			});
		})();
	</script>
</body>

</html>