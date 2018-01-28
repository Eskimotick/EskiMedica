<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>EskiMedica</title>
		<link rel="stylesheet" type="text/css" href="css/planos.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<link rel="shortcun icon" href="img/icone/logo.ico">
	</head>
	<body>
		<div class="navbar-fixed">
			<nav class="white z-depth-2">
				<div class="nav-wrapper">
					<a href="index.html"><img src="img/icone/logo.png" class="logo"></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sobrenos.html">Sobre nós</a></li>
						<li><a href="planos.html">Planos</a></li>
						<li><a href="atendimento.html">Atendimento</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<section>
			<div class="carousel carousel-slider center" data-indicators="true">
				<div class="carousel-fixed-item center">
				</div>
				<div class="carousel-item" id="carousel-1"> 
					<div id="carousel-info">
						<h2>Planos Individuais</h2>
						<p class="black-text">Gold, Platinum e Diamond</p>
						<a class="bottom btn waves-effect blue lighten-1">Descubra agora!</a>
					</div>
				</div>
				<div class="carousel-item white-text" id="carousel-2">
					<div id="carousel-info">
						<h2>Planos Famílias</h2>
						<p class="white-text">Ruby, Sapphire, Emerald e Planos Especiais para moradores da rocinha!</p>
						<a class="btn waves-effect blue lighten-1" id="carousel-buttons">Descubra agora!</a>
					</div>
			    </div>
				<div class="carousel-item black-text" id="carousel-3">
					<div id="carousel-info">
						<h2>Planos Odontológicos</h2>
						<p class="black-text">Kids, Individual e Family</p>
						<a class="btn waves-effect blue lighten-1" id="carousel-buttons">Descubra agora!</a>
					</div>
				</div>
			</div>
		</section>
		<footer class="white page-footer">
			<div class="container">
				<div class="row">
					<div class="col l3">
						<p id="titulo-footer">Serviços</p>
						<div id="minusculo">
							<ul>
								<li><a href="boletos.html">2ª via de boletos</a></li>
								<li><a href="agendamento.html">2ª via da carteirinha</a></li>
								<li><a href="resultado.html">Consulta de resultado de exame</a></li>
								<li><a href="agendamento.html">Marcação de exame</a></li>
							</ul>
						</div>
					</div>
					<div class="col l4 offset-l1">
						<p id="titulo-footer">Contatos</p>
						<div id="minusculo"> 
							<ul>
								<div class="black-text">
									<li>Capitais e regiões metropolitanas: 3003-4004</li>
									<li>Demais regiões: 4004-3003</li>
									<li>SAC: 4003-3004</li>
									<li>e-mail: atendimento@eskimedica.com.br</li>
								</div>
									<li><a href="atendimento.html">Atendimento Online</a></li>
							</ul>
						</div>
					</div>
					<div class="col l3 offset-l1" id="footer-login">
						<a href="login.html">Faça seu login para mais serviços!</a>
					</div>
				</div>
			</div>
			<div class="grey lighten-2 footer-copyright">
				<div class="container">
					<div class="row" id="copyright">
						© 2018. EskiMedica Assistência de Saúde. Todos os direitos reservados.<br>
						CNPJ: 12.345.678/0001-90 <br>
						Rua Santa Heleninha, 639. Rio de Janeiro - RJ, CEP: 25123-456
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script> $('.carousel.carousel-slider').carousel({fullWidth: true, padding:200},setTimeout(autoplay, 4500));
		function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 4500);
		}</script>
	</body>
</html>