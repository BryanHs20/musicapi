<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Informacion Artistas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
						<a href="{{route('vista.genero')}}" class="logo"><strong>Music</strong> <span>api</span></a>
						<nav>
							<a href="#menu">Menú</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
					<ul class="links">
                            <li><a href="{{route('vista.genero')}}">Inicio</a></li>
                            <li><a href="{{route('vista.artista')}}">Artistas</a></li>
                            <li><a href="generic.html">Letras</a></li>
                        </ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
							@foreach($musicasrap2 as $ok)
								<div class="inner">
									<header class="major">
										<h1>{{$ok['Nombre']}}</h1>
									</header>
									<span class="image main"><img src="{{$ok['Imagen']}}" alt="" /></span>
									<p>{{$ok['Descripcion']}}</p>
								</div>
							@endforeach
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
							<li><a href="https://twitter.com/laravelphp" target="_blank" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/UniversidadPolitecnicadeTecamac" target="_blank" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/ozuna/?hl=es-la" target="_blank" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/BryanHs20/musicapi" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy;Muciapi</li><li>Design: <a href="https://segundoblog.herokuapp.com/" target="_blank">BVLLS W3B &copy;</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>