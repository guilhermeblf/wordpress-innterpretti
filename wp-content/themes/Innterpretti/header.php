<?php wp_head();?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Blog - Innterpretti</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/blog.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/cssmenu.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/reset.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script>
		function myCallback(i, width) {
			document.documentElement.id = 'range_' + i;
		}
		var ADAPT_CONFIG = {
			path: '<?php bloginfo('template_directory');?>/css/',
			dynamic: true,
			callback: myCallback,
			range: [
		'0px    to 980px  = mobile.css',
	    '980px = 960.css'

	  ]
		};
	</script>

	<script src="<?php bloginfo('template_directory');?>/js/adapt.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/script.js"></script>

</head>

<body>

	<div id="topo_2">
		<div class="container_12">
			<div class="logo grid_3">
				<a href="index.html"><img src="<?php bloginfo('template_directory');?>/images/logo.png"></a>
			</div>
			<div class="menu grid_9">
				<ul>
					<a href="index.html">
						<li>
							Início
						</li>
					</a>
					<a href="#">
						<li>
							Sugestão
						</li>
					</a>
					<a href="#">
						<li>
							Desempenho
						</li>
					</a>
					<a href="#">
						<li>
							Anotações
						</li>
					</a>
					<a href="#">
						<li>
							Orçamento
						</li>
					</a>
					<a href="#">
						<li>
							Preço
						</li>
					</a>

					<a href="#">
						<li class="botao_menu">
							Entrar
						</li>
					</a>
				</ul>

			</div>
		</div>

			<div class="grid_9" id='cssmenu'>
				<ul>
					<li class='active'><a href="index.html"><span>Início</span></a>
					</li>
					<li class='active'><a href="#sugestao"><span>Sugestão</span></a>
					</li>
					<li class='active'><a href="#desempenho"><span>Desempenho</span></a>
					</li>
					<li class='active'><a href="#anotacoes"><span>Anotações</span></a>
					</li>
					<li class='active'><a href="#orcamento"><span>Orçamento</span></a>
					</li>
					<li class='active'><a href="#preco"><span>Preço</span></a>
					</li>
					<li class='active'><a href="#anotacoes"><span>Blog</span></a>
					</li>
					<li class='active'><a href="#"><span>Entrar</span></a>
					</li>
				</ul>

	</div>
