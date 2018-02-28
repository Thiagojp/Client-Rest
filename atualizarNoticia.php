

	<!DOCTYPE HTML>
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
									<p><strong>Alterar (apenas o titulo)</strong></p>
									
								</header>
								
								
								<p></p>
								
								<form method="post" action="result.php">
								<input type="hidden" name="op" value="update">								
        							<div class="row uniform">
										<div class="4u$ 12u$(xsmall)">
											<input type="text" name="id" id="id" placeholder="Informe o codigo da Noticia" required ="true" />
										</div>
										<div class="4u$ 12u$(xsmall)">
											<input type="text" name="title" id="title" placeholder="Informe o titulo da Noticia" required ="true"/>
										</div>
										<!-- Break -->
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Alterar" class="special" /></li>
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
										<a href="recuperarNoticia.php">Recuperar Noticia</a>
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