	<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Client Rest</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<div class="inner">

							<!-- Header -->
								<header id="header">
									<p><strong>Consultar Notícia</strong></p>
									
								</header>
								
								
								<p></p>
								
								<form method="post" action="result.php">
									<input type="hidden" name="op" value="search">
									<div class="row uniform">
										<div class="4u$ 12u$(xsmall)">
											<input type="text" name="id" id="id" placeholder="Informe o id da Noticia" required ="true" />
										</div>
										
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Listar" class="special" /></li>
											</ul>
										</div>
									</div>
								</form>
									
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<nav id="menu">
								<header class="major">
									<h2>Menu</h2>
								</header>
								<ul>
									<li>
										<a href="cadastrarNoticia.php">Cadastrar Noticia</a>
										<a href="recuperarNoticia.php">Consultar Noticia</a>
										<a href="atualizarNoticia.php">Atualizar Titulo da Noticia</a>										
										<a href="excluirNoticia.php">Excluir</a>										
									</li>									
								</ul>
							</nav>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>