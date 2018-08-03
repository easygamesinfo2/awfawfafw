<!DOCTYPE html>

<html lang="pt-BR">

<head>    

	<title>Easy Games</title>

	<meta charset="utf-8">   

	<link rel="stylesheet" type="text/css" href="semantic/semantic.css">

	<script type="text/javascript" src="semantic/semantic.min.js"></script>

</head>

<body style="background-color: #2B2B2B">

	<div class="ui top attached tabular inverted menu" style= "height:5.5%;background-color: #191919; ">
		
		<div class="ui medium image" style=" margin-left: 3%">
			<img src="imagenseg/Easy Gaming.png">
		</div>

		<div class="right menu">
			<a class="item" href="indexLogado.html">
				Home
			</a>

			<a class="item active" href="noticias.php">
				Noticias
			</a>

			<a class="item" href="avalia.html">
				Avaliações
			</a>

		</div>


		<div class="right menu">

			<div class="right menu">

			<a class="item" href="perfil.html">
				<i class="user icon"></i>
				Perfil
			</a>
			</div>

			<div class="item">

				<div class="ui transparent icon input">
					<input type="text" placeholder="Pesquisar...">
					<i class="search link icon"></i>


				</div>
			</div>
		</div>
	</div>


	<div style="margin-left: 20%; margin-right: 20%">

			<div class="ui one column grid" style="margin-top: 5%">

				<?php

					require_once "modelos/crud_noticia.php";
					$crud = new crud_noticia();
  					$noticias = $crud->get_noticias();
  					foreach ($noticias as $noticia):
				?>
				<div class="column">
					<div class="ui  segment" style=";background-color: #191919">
						<h1 style="color: white">
							<?=
								$noticia->getTitulo();
							?>
						</h1>
						<p style="color: white">
							<?=
								$noticia->getDescricao();
							?>
						</p>
					</div>
				</div>

				
					
				</div>



				<?php endforeach;

					if (isset($_POST['editar'])) {
						header('notind.html');
					}

				 ?>

			</div>

	</div>

	<!-- rodapé  -->


		<div class="ui inverted vertical footer segment" style= "background-color: #191919; margin-top: 5%">

			<div class="ui inverted section divider"></div>

			<div class="ui center aligned container">

				<div class="ui stackable inverted divided grid">

					<div class="three wide column">

						<h4 class="ui inverted header">Desenvolvedores</h4>

						<div class="ui inverted link list">

							<a href="#" class="item">Gabriel Sokacheski </a>
							<a href="#" class="item">Athirson Santos </a>
							<a href="#" class="item">Carlos Eduardo </a>

						</div>

					</div>

					<div class="three wide column">

						<h4 class="ui inverted header">Steam</h4>

						<div class="ui inverted link list">

							<a href="#" class="item">Pakkun     <i class="steam icon"></i></a>
							<a href="#" class="item">titoMatdor  <i class="steam icon"></i></a>
							<a href="#" class="item">guaxinim456 <i class="steam icon"></i></a>

						</div>

					</div>

					<div class="three wide column">

						<h4 class="ui inverted header">Instagram</h4>

						<div class="ui inverted link list">

							<a href="#" class="item">gsokacheski     <i class="instagram icon"></i></i></a>
							<a href="#" class="item">athirsonSantos <i class="instagram icon"></i></a>
							<a href="#" class="item">carlosEduardo <i class="instagram icon"></i></a>

						</div>

					</div>

					<div class="three wide column">

						<h4 class="ui inverted header">Facebook</h4>

						<div class="ui inverted link list">

							<a href="#" class="item">Gabriel Sokacheski <i class="facebook icon"></i></i></a>
							<a href="#" class="item">Athirson Santos <i class="facebook icon"></i></a>
							<a href="#" class="item">Carlos Eduardo Rosa <i class="facebook icon"></i></a>

						</div>

					</div>

					<div class="three wide column">

						<h4 class="ui inverted header">Easy Games</h4>

						<div class="ui inverted link list">

							<a href="#" class="item">Youtube  <i class="youtube play icon"></i></i></a>
							<a href="#" class="item">Facebook <i class="facebook icon"></i></a>
							<a href="#" class="item">E-Mail   <i class="mail icon"></i></a>

						</div>

					</div>
					
				</div>

				<div class="ui inverted section divider"></div>

				<div class="seven wide column">

						<h4 class="ui inverted header">Suporte</h4>

						<p>Desenvolvido por alunos do Instituto Federal Catarinense campus Araquari</p>

					</div>

			</div>

		</div>


		<!--- fim rodapé --> 

</body>

</html>