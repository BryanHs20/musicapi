<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Musicapi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

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
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Canciones</h1>
							</header>
							<div class="content">
								<p>Genero Balada</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
							<section id="two" class="spotlights">
							@foreach($musicasbalada as $balada)
								<section>
									<a href="#" class="image">
										<img src="{{$balada['Portada']}}" alt="" data-position="center center" />
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>{{$balada['Titulo']}}</h3>
											</header>
											<p>Duracion: {{$balada['Duracion']}}</p>
											<ul class="actions">
												<li><a href="generic.html" class="button">Ver letra</a></li>
											</ul>
										</div>
									</div>
								</section>
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
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>