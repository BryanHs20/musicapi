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

				<!-- Banner -->
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
					<section id="banner" class="major"></section>
						<div class="inner">
							<header class="major">
								<h1>Generos</h1>
							</header>
							<div class="content">
								<p></p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Comencemos </a></li>
								</ul>
							</div>
						</div>
					</section>

					<!-- Empieza el apartado de los generos -->
				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="{{route('vista.rock')}}" class="link">Rock</a></h3>
										<p>The Beatles</p>
										<p>Rolling Stones</p>
										<p>Radiohead</p>
										<p>The Who</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="{{route('vista.pop')}}" class="link">Pop</a></h3>
										<p>Adele</p>
										<p>Billie Ellish</p>
										<p>Drake</p>
										<p>Halsey</p>
										<p>The weeknd</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="{{route('vista.trap')}}" class="link">Trap</a></h3>
										<p>Duki</p>
										<p>Juice Wrld</p>
										<p>Marcianeke</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="{{route('vista.balada')}}" class="link">Balada</a></h3>
										<p>Luis Miguel</p>
										<p>Mon laferte</p>
										<p>Cami</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="{{route('vista.banda')}}" class="link">Banda</a></h3>
										<p>Christian Nodal</p>
										<p>Banda MS</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />	
									</span>
									<header class="major">
										<h3><a href="{{route('vista.reggaeton')}}" class="link">Reggaeton</a></h3>
										<p>Maluma</p>
										<p>Farruko</p>
										<p>J Balvin</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />	
									</span>
									<header class="major">
										<h3><a href="{{route('vista.rap')}}" class="link">Rap</a></h3>
										<p>Aitana</p>
										<p>Cancerbero</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic06.jpg" alt="" />	
									</span>
									<header class="major">
										<h3><a href="{{route('vista.norteño')}}" class="link">Norteño</a></h3>
										<p>Grupo Firme</p>
										<p>Calibre 50</p>
									</header>
								</article>
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