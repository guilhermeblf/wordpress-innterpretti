<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Innterpretti</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/cssmenu.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/utility.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/animate.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_directory');?>/js/jquery-migrate-1.2.1.js"></script>



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
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="venobox/venobox.js"></script>
	<script>
		$(document).ready(function () {

			/* default settings */
			$('.venobox').venobox();


			/* custom settings */
			$('.venobox_custom').venobox({
				framewidth: '400px', // default: ''
				frameheight: '300px', // default: ''
				border: '10px', // default: '0'
				bgcolor: '#5dff5e', // default: '#fff'
				titleattr: 'data-title', // default: 'title'
				numeratio: true, // default: false
				infinigall: true // default: false
			});

			/* auto-open #firstlink on page load */
			$("#firstlink").venobox().trigger('click');
		});
	</script>
</head>

<body>
	<div id="topo">
		<div class="container_12">
			<div class="logo grid_3">
				<a href="index.html">
					<img src="<?php bloginfo('template_directory');?>/images/logo.png">
				</a>
			</div>
			<div class="menu grid_9">
				<ul>
					<a href="#banner">
						<li>
							Início
						</li>
					</a>
					<a href="#sugestao">
						<li>
							Sugestão
						</li>
					</a>
					<a href="#desempenho">
						<li>
							Desempenho
						</li>
					</a>
					<a href="#anotacoes">
						<li>
							Anotações
						</li>
					</a>
					<a href="#orcamento">
						<li>
							Orçamento
						</li>
					</a>
					<a href="#preco">
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

			<div class="grid_9" id='cssmenu'>
				<ul>
					<li class='active'><a href="#banner"><span>Início</span></a>
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
					<li class='active'><a href="#"><span>Entrar</span></a>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<div id="banner">
		<div class="container_12">
			<div class="conteudo_banner">
				<div class="grid_6 left_fade animated fadeInLeft">
					<h1>Potencialize Resultados</h1>
					<h5>Aumente as chances de acertar</h5>
					<div class="texto_banner">
						<p>Solicite e receba a <b>Interpretação<br> da Análise de Solo Agrícola</b>
							<br>ultilizando a facilidade do <i>e-mail</i>
						</p>
					</div>
					<div class="digite_email grid_4 alpha">
						<input type="text" placeholder="Digite o e-mail">
					</div>

					<div class="botao_email grid_2 omega">
						<input type="submit" value="Solicitar
interpretação" id="botao_email">


					</div>

					<div class="clear"></div>
					<div class="observacao_banner">
						<p>Digite o e-mail no qual você deseja receber a interpretação e clique em “Solicitar Interpretação”. Você vai receber uma mensagem de boas vindas e o acesso imediato ao sistema que permite solicitar a interpretação.</p>
					</div>


				</div>
				<div class="grid_6 right_fade animated fadeInRight">
					<div class="imagem_banner">
						<img src="<?php bloginfo('template_directory');?>/images/imagem_banner.png">

						<div class="legenda">
							<p>*Siga até o final da página e veja os detalhes.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="conteudo">
		<div class="container_12">
			<h1 class="left_fade animated fadeInLeft">Saia na Frente</h1>
			<h5 class="left_fade animated fadeInLeft">Tenha total <b>liberdade para escolher</b> e <b>resolva</b> tudo do seu jeito,<br>
				com agilidade, tranquilidade e segurança.</h5>

			<div class="topicos grid_5 left_fade animated fadeInLeft">
				<div class="icone_topico grid_1 alpha">
					<img src="<?php bloginfo('template_directory');?>/images/icone1.png">
				</div>
				<div class="informacao_topico grid_4 omega">
					<p><b>Você escolhe o laboratório de sua preferência</b> para fazer a análise quimica do solo agrícola e um Consultor Innterpretti interpreta os resultados para você ou para seus clientes.</p>
				</div>


				<div class="icone_topico grid_1 alpha">
					<img src="<?php bloginfo('template_directory');?>/images/icone2.png">
				</div>
				<div class="informacao_topico grid_4 omega">
					<p><b>Você escolhe como quer pagar</b> e pode decidir, com segurança, entre as opções de depósito, boleto ou cartão de crédito.</p>

				</div>


				<div class="icone_topico grid_1 alpha">
					<img src="<?php bloginfo('template_directory');?>/images/icone3.png">
				</div>
				<div class="informacao_topico grid_4 omega">
					<p><b>Você escolhe o melhor momento</b> e pode solicitar e receber a interpretação da análise de solo,<b> onde você estiver</b>, nos mais diversos lugares e a qualquer hora, basta ter acesso à internet. Solicite agora, se desejar.</p>
				</div>
			</div>
			<div class="topicos grid_7">

				<a class="venobox" data-type="youtube" href="www.youtube.com/embed/LNhJrZ_rR3g">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_video.png" alt="" />
				</a>
				
			</div>

		</div>
		<div class="container_12">
			<div class="faixa_divisor"></div>

			<h1 class="left_fade animated fadeInLeft">Faça da melhor maneira</h1>
			<div class="subtitulo_geral">
				<h5 class="left_fade animated fadeInLeft">Veja 3 condições importantes para você progredir rápido.</h5>
			</div>
			<div class="topicos">
				<div class="grid_7 right_fade animated fadeInRight">
					<div class="imagem_conteudo">
						<img src="<?php bloginfo('template_directory');?>/images/imagem_computador.png " alt="imagem_grafico">
					</div>
				</div>
				<div class="grid_5 left_fade animated fadeInLeft">
					<div class="icone_topico_1 grid_1 alpha ">
						<img src="<?php bloginfo('template_directory');?>/images/icone_numero1.png">
					</div>
					<div class="informacao_topico grid_4 omega">
						<p><b>Conheça o ambiente</b> para saber onde está o risco e para identificar qual indicador está impedindo o alcance de melhores resultados.</p>
					</div>

					<div class="icone_topico grid_1 alpha">
						<img src="<?php bloginfo('template_directory');?>/images/icone_numero2.png">
					</div>
					<div class="informacao_topico grid_4 omega">
						<p><b>Escolha e contate o laboratório</b> para fazer a análise do solo antes de coletar as amostras no campo.</p>
					</div>

					<div class="icone_topico grid_1 alpha">
						<img src="<?php bloginfo('template_directory');?>/images/icone_numero3.png">
					</div>
					<div class="informacao_topico_3 grid_4 omega">
						<p><b>Entenda que no dia a dia da atividade agropecuária</b>, quem tem uma resposta pronta tem grande chance de errar.</p>
					</div>

					<div class="conteudo_topico" id="pos_melhor">
						<p><b>Dica:</b> Você conhece parte do ambiente por meio do processo que envolve a amostragem, a análise e a interpretação técnica dos resultados da análise química de uma amostra do solo agrícola.</p>
						<br>
						<p><b>Sugestão:</b> Para fazer a análise do solo, prefira laboratórios com certificação e que realizem a análise completa, incluindo percentual de argila, matéria orgânica, enxofre, fósforo remanescente, macro e micro nutrientes.</p>
						<br>
						<p><b>Realidade:</b> No cenário agropecuário, a descoberta é fascinante, mas o caminho é bem longo. Basta mudar o clima, o teor de água no solo, o preço dos insumos ou dos produtos que tudo fica diferente.</p>
						<div id="sugestao"></div>

					</div>

				</div>

			</div>
		</div>
		<div class="container_12">
			<div class="faixa_divisor"></div>
			<h1 class="left_fade animated fadeInLeft">Faça a escolha certa</h1>
			<h5 class="left_fade animated fadeInLeft"><b>Seja cauteloso.</b> Aproveite bem os serviços e procure agir respeitando<br>
				cada situação conforme a sua condição.
 </h5>

			<div class="grid_4 alpha right_fade animated fadeInRight">
				<div class="escolha">
					<div class="zoom_photo">
						<div class="view view-first">
							<div class="imagem_escolha">
								<img src="<?php bloginfo('template_directory');?>/images/escolha1.jpg">
							</div>
							<div class="mask">
								<span class="zoom"></span>
							</div>
						</div>
					</div>
					<div class="conteudo_escolha">
						<h3>O QUE FAZER...</h3>
						<p>Baixe agora o arquivo em <b>PDF</b> e veja <b>sugestões do que fazer antes de escolher o laboratório</b> de análise de solo agrícola.</p>
						<div class="botao_pdf">
							<a href="pdf/1_Innterpretti_O%20que%20fazer%20antes%20de%20escolher..._RSL_.pdf" target="_blank">
								<img src="<?php bloginfo('template_directory');?>/images/botao_pdf.png">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="grid_4 right_fade animated fadeInRight">
				<div class="escolha">
					<div class="view view-first">
						<div class="imagem_escolha">
							<img src="<?php bloginfo('template_directory');?>/images/escolha2.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_escolha">
						<h3>A ESCOLHA CERTA...</h3>
						<p>Clique no botão abaixo e abra agora o <b>PDF</b> com dicas sobre <b>como escolher o laboratório de análise de solo agrícola.</b>
						</p>
						<div class="botao_pdf">
							<a href="pdf/2_Escolha_Certa.pdf" target="_blank">
								<img src="<?php bloginfo('template_directory');?>/images/botao_pdf.png">
							</a>
						</div>
					</div>
				</div>

			</div>
			<div class="grid_4 omega">
				<div class="escolha right_fade animated fadeInRight">
					<div class="view view-first">
						<div class="imagem_escolha">
							<img src="<?php bloginfo('template_directory');?>/images/escolha3.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_escolha">
						<h3>AMOSTRAGEM DO SOLO...</h3>
						<p>Clique no botão abaixo e veja imediatamente o <b>PDF com 11 dicas</b> resumidas sobre a amostragem do solo agrícola.</p>
						<div class="botao_pdf">
							<a href="pdf/3_Innterpretti_11%20dicas%20sobre%20amostragem..._RSL_.pdf " target="_blank">
								<img src="<?php bloginfo('template_directory');?>/images/botao_pdf.png">
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="container_12">
			<div class="faixa_divisor"></div>

			<h1 class="left_fade animated fadeInLeft">Ganhe tempo e economia</h1>
			<h5 class="left_fade animated fadeInLeft"><b>Elimine</b> as dificuldades, <b>supere</b> as limitações geográficas e <br><b>resolva tudo em 3 passos. Veja como funciona.</b></h5>
			<div class="grid_5">
				<div class="topicos left_fade animated fadeInLeft">
					<div class="conteudo_topico">
						<p><span>Passo 1:</span> Você acessa o Sistema Innterpretti e <b>envia o laudo</b> com os resultados da análise feita pelo laboratório de sua preferência. Tudo em poucas etapas. <i><b>É rápido!</b></i>
						</p>
						<br>
						<p><span>Passo 2:</span>  <b>Você informa quantas e quais amostras</b> do laudo devem ser interpretadas e paga o valor correspondente: <b>preço por amostra.</b> As ações são automatizadas. <i><b>É fácil!</b></i>
						</p>
						<br>
						<p><span>Passo 3:</span>  <b>Pronto!</b> Após a confirmação do pagamento (de 3 a 7 dias úteis) você recebe a interpretação. Tudo sem sair de casa ou escritório. <i><b>É seguro!</b></i>
						</p>
					</div>

				</div>

			</div>
			<div class="grid_7 video_funciona">
				<br>

				<a class="venobox" data-type="youtube" href="http://youtu.be/Iocz8UIdx1M">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_video.png" alt="" />
				</a>
				
			</div>
		</div>
		<div class="container_12">
			<div class="faixa_divisor"></div>
			<h1 class="left_fade animated fadeInLeft">Agilize o orçamento</h1>
			<div class="subtitulo_geral">
				<h5 class="left_fade animated fadeInLeft">Entenda a diferença entre <b>Laudo e Amostra.</b></h5>
			</div>

			<div class="agilize right_fade animated fadeInRight">
				<img src="<?php bloginfo('template_directory');?>/images/imagem_agilize.jpg">
			</div>
		</div>

		<div class="container_12">
			<div class="faixa_divisor"></div>

			<h1 class="left_fade animated fadeInLeft">Tenha um relatório diferente</h1>
			<h5 class="left_fade animated fadeInLeft">Valorize todo esforço e investimento e dê um <b>novo sentido</b> para os <br> dados gerados com a análise do solo agrícola.

			</h5>
			<div class="topicos grid_5">


				<div class="conteudo_topico left_fade animated fadeInLeft">
					<p>Nos casos em que a interpretação é de uma análise completa, incluindo macro e micro nutrientes, análise textural (percentual de argila) e fósforo remanescente, você vai receber <b>mais de 03 páginas em PDF</b> com informações úteis e necessárias para aumentar as chances de você acertar na tomada de decisão.</p>
				</div>
			</div>
			<div class="topicos grid_7 right_fade animated fadeInRight">
				<div class="relatorio">
					<img src="<?php bloginfo('template_directory');?>/images/relatorio.jpg">
					<div id="desempenho"></div>

				</div>
			</div>
		</div>

		<div class="container_12">
			<div class="faixa_divisor"></div>
			<h1 class="left_fade animated fadeInLeft">Busque um direcionamento</h1>
			<h5 class="left_fade animated fadeInLeft">Tenha <b>informações necessárias</b> para se orientar e <b>evite adivinhações.</b></h5>

			<div class="topicos grid_5">
				<div class="conteudo_topico left_fade animated fadeInLeft">
					<p><b>Imagine</b> o momento de decisão e <b>pense nas melhorias que você pode alcançar</b> se tiver as informações certas para poder agir sobre ações que impactam nos resultados e que realmente são prioritárias.</p>
				</div>
			</div>

			<div class="topicos grid_7 right_fade animated fadeInRight">
				<div class="imagem_diferencial">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_direcionamento.jpg">
				</div>
			</div>

		</div>

		<div class="container_12">
			<div class="faixa_divisor"></div>
			<h1 class="left_fade animated fadeInLeft">Desfrute dessa possibilidade</h1>
			<h5 class="left_fade animated fadeInLeft"><b>Supere</b> obstáculos e <b>alcance</b> o próximo nível na sua atividade agropecuária.</h5>

			<div class="topicos grid_5">
				<div class="comparativo left_fade animated fadeInLeft">
					<p>Você não precisa ser um perito em análise de solo para conseguir ler e entender a interpretação.</p>
					<p><b>As informações são apresentadas de forma bem didática,</b> de modo a facilitar tudo para você conseguir entender e agir imediatamente.</p>
				</div>

			</div>
			<div class="topicos grid_7 right_fade animated fadeInRight">
				<div class="imagem_comparativa">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_comparativa.jpg">
				</div>
			</div>

		</div>
		<div class="observacao">
			<div class="container_12">
				<div class="anuncio">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_anuncio.png">
				</div>
			</div>
		</div>

		<div class="container_12">
			<h1 class="left_fade animated fadeInLeft">Encurte caminhos</h1>
			<h5 class="left_fade animated fadeInLeft"><b>Identifique facilmente</b> o que deve ser priorizado.</h5>

			<div class="topicos grid_6">
				<div class="imagem_diferencial_1 left_fade animated fadeInLeft">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_diferencial.png">
				</div>
			</div>
			<div class="topicos grid_6">
				<div class="conteudo_topico right_fade animated fadeInRight">
					<p>Mesmo que você tenha dificuldade com alguma referência numérica <b>você vai entender facilmente as informações.</b>
					</p>
					<br>
					<p>Na interpretação, boa parte dos resultados são transformados em <b>mapas visuais que facilitam o entendimento.</b>
					</p>
					<br>
					<p>Você vai <b>identificar rapidamente</b> qual é a condição desejada e qual é a condição atual do solo analisado.</p>
					<br>
					<p>Você vai <b>saber facilmente</b> qual indicador está causando impacto positivo ou negativo.</p>
				</div>
			</div>
		</div>

		<div class="container_12 left_fade animated fadeInLeft">
			<div class="faixa_divisor"></div>
			<h1>Fuja dos pré-conceitos</h1>
			<div class="pre_conceito grid_8 push_2">
				<p>Mesmo que o laboratório forneça informações complementares e você tenha conhecimento para avaliar os resultados da análise de solo, <b>é conveniente considerar</b> a possibilidade de recorrer a uma interpretação realizada por alguém capacitado e que não esteja diretamente envolvido com a sua atividade agropecuária.</p>
				<br>
				<p>Isso pode trazer informações diferenciadas e <b>evitar possíveis interpretações involuntariamente tendenciosas.</b>
				</p>
				<br>
				<p>Falamos em “tendenciosas” no sentido de fugir dos pré-conceitos que criamos quando acreditamos que conhecemos bem um determinado talhão ou propriedade rural.</p>
				<br>
				<p>Em alguns casos é necessário fazer diferente para obter resultados diferentes.</p>
			</div>
		</div>

		<div class="container_12">
			<div class="faixa_divisor"></div>

			<div class="topicos grid_6">
				<div class="titulo_geral">
					<h1 class="left_fade animated fadeInLeft">Só relembrando</h1>
				</div>

				<div class="conteudo_topico left_fade animated fadeInLeft">
					<p>No processo de amostragem do solo agrícola a utilização de <b>ferramentas enferrujadas pode alterar a determinação correta da análise química</b> feita no laboratório, principalmente em relação aos teores de micronutrientes.</p>
					<br>
					<p>Ou seja, na agropecuária, pequenas atitudes fazem grande diferença. Por isso, em alguns casos é mais fácil sair do zero e chegar a 35 sacos/ha do que sair de 35 e chegar a 60 sacos/ha.</p>
					<br>
					<p>Clique no botão abaixo e veja uma "Lista de verificações” para auxiliar no processo que envolve a amostragem, a análise laboratorial e a interpretação técnica dos resultados da análise de solo agrícola.</p>
					<br>
					<div class="botao_check">
						<a href="pdf/4_Check_List.pdf" target="_blank">
							<img src="<?php bloginfo('template_directory');?>/images/botao_verificacao.png">
						</a>
					</div>

				</div>

			</div>
			<div class="topicos grid_6 right_fade animated fadeInRight">
				<div class="imagem_relembrando">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_relembrando.jpg">
				</div>
			</div>
		</div>
		<div class="aprimoramento">
			<div class="container_12">

				<div class="titulo_aprimoramento">
					<h1 class="left_fade animated fadeInLeft">Torne o seu dia mais produtivo</h1>
					<h5 class="left_fade animated fadeInLeft">Faça igual aos produtores de <b>melhor desempenho</b></h5>
				</div>
				<div class="bloco_aprimoramento grid_3 alpha left_fade animated fadeInLeft">
					<div class="view view-first">
						<div class="imagem_aprimoramento">
							<img src="<?php bloginfo('template_directory');?>/images/aprimoramento_1.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_aprimoramento">
						<p>Solicite a interpretação da análise de solo por meio da internet e <b>aproveite todo tempo e energia</b> com a solução e não com o problema.</p>

					</div>

				</div>

				<div class="bloco_aprimoramento grid_3 left_fade animated fadeInLeft">
					<div class="view view-first">
						<div class="imagem_aprimoramento">
							<img src="<?php bloginfo('template_directory');?>/images/aprimoramento_2.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_aprimoramento">
						<p>Tome – ou ofereça aos seus clientes condições para tomarem – <b>decisões baseadas em métricas.</b>
						</p>

					</div>


				</div>

				<div class="bloco_aprimoramento grid_3 right_fade animated fadeInRight">
					<div class="view view-first">
						<div class="imagem_aprimoramento">
							<img src="<?php bloginfo('template_directory');?>/images/aprimoramento_3.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_aprimoramento">
						<p><b>Otimize e fortaleça equipes.</b> Agilize, priorize e delegue tarefas que exigem tempo e conhecimento técnico.</p>

					</div>


				</div>

				<div class="bloco_aprimoramento grid_3 omega right_fade animated fadeInRight">
					<div class="view view-first">
						<div class="imagem_aprimoramento">
							<img src="<?php bloginfo('template_directory');?>/images/aprimoramento_4.jpg">
						</div>
						<div class="mask">
							<span class="zoom"></span>
						</div>
					</div>
					<div class="conteudo_aprimoramento">
						<p>Conte com um colaborador capacitado trabalhando à distância e entregando um <b>serviço que pode perfeitamente ser solicitado, realizado e entregue por meio da internet.</b>
						</p>

					</div>

				</div>
			</div>
		</div>

		<div class="container_12">
			<div class="perfil">
				<h1 class="left_fade animated fadeInLeft">Perfil e Segmento</h1>
				<h5 class="left_fade animated fadeInLeft">Saiba <b>quem normalmente<br>utiliza ou acompanha</b> o Sistema innterpretti.

				</h5>

				<div class="conteudo_perfil grid_6 push_3 left_fade animated fadeInLeft">
					<ul>
						<li>Produtores Rurais.</li>
						<li>Estudantes de Agrárias.</li>
						<li>Comerciantes Agropecuários.</li>
						<li>Associações e Sindicatos Rurais.</li>
						<li>Cooperativas agrícolas e pecuárias.</li>
						<li>Agroempresas de diferentes tamanhos.</li>
						<li>Consultores e Profissionais de Agrárias.</li>
						<li>Laboratórios de Análise de Solo agrícola.</li>
						<li>Envolvidos com a atividade agropecuária.</li>

					</ul>
				</div>
				<div class="conteudo_perfil grid_5 right_fade animated fadeInRight">
					<div class="imagem_perfil">
						<img src="<?php bloginfo('template_directory');?>/images/perfil.png">
					</div>
				</div>
			</div>

		</div>
		<div id="orcamento"></div>

		<div class="faixa_azul">
			<div class="container_12">
				<div class="primeiro_passo grid_6 ">
					<img src="<?php bloginfo('template_directory');?>/images/imagem_primeiro_passo.png">
				</div>

				<div class="primeiro_passo grid_6">
					<h1>Dê o primeiro passo</h1>

					<h5 class="left_fade animated fadeInLeft"><b>Conheça</b> o sistema e <b>simule imediatamente</b> o seu orçamento, <b>sem nenhum compromisso.</b></h5>

					<p>Informe o <i>e-mail</i> no qual você deseja receber a interpretação e clique em "Simular orçamento".</p>
					<br>
					<p>Você vai receber uma mensagem de boas vindas e o acesso imediato ao sistema que permite simular o orçamento ou solicitar o serviço.</p>
					<br>
					<p><b>Alternativas existem.
						<br>Escolha aquela que seja adequada para você.</b>
					</p>
					<div class="digite_email grid_4 alpha">
						<input type="text" placeholder="Digite o e-mail">
					</div>

					<div class="botao_email grid_2 omega">
						<input type="submit" value="Simular
Orçamento" id="botao_email">
					</div>
				</div>
			</div>
			<div id="anotacoes"></div>

		</div>

		<div class="faixa_cinza">

			<div class="container_12 left_fade animated fadeInLeft">

				<h1 class="left_fade animated fadeInLeft">Anotações</h1>
				<h5 class="left_fade animated fadeInLeft">Obtenha <b>novos conhecimentos</b> ou revise aqueles já assimilados</h5>
				<div class="grid_4 alpha">
					<div class="escolha">
						<div class="view view-first">
							<div class="imagem_escolha">
								<img src="<?php bloginfo('template_directory');?>/images/escolha4.jpg">
							</div>
							<div class="mask">
								<span class="zoom"></span>
							</div>
						</div>
						<div class="conteudo_bloco_branco">
							<h3>Aproveite o conhecimento...</h3>
							<p>Para que a falta de conhecimento não seja um problema é preciso nivelar e acessar as mesmas informações acessadas por aqueles que sempre estão avançando para...</p>
							<div class="botao_ver">
								<a href="#">
									<img src="<?php bloginfo('template_directory');?>/images/botao_ver.png">
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="grid_4">
					<div class="escolha">
						<div class="view view-first">
							<div class="imagem_escolha">
								<img src="<?php bloginfo('template_directory');?>/images/escolha5.jpg">
							</div>
							<div class="mask">
								<span class="zoom"></span>
							</div>
						</div>
						<div class="conteudo_bloco_branco">
							<h3>Como escolher uma...</h3>
							<p>Leve em consideração os fatores como: comodidade, ganho de tempo, custo/benefício e liberdade para decidir o melhor momento para acessar a ferramenta...</p>
							<div class="botao_ver">
								<a href="#">
									<img src="<?php bloginfo('template_directory');?>/images/botao_ver.png">
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="grid_4 omega">
					<div class="escolha">
						<div class="view view-first">
							<div class="imagem_escolha">
								<img src="<?php bloginfo('template_directory');?>/images/escolha6.jpg">
							</div>
							<div class="mask">
								<span class="zoom"></span>
							</div>
						</div>
						<div class="conteudo_bloco_branco">
							<h3>Você está preparado para...</h3>
							<p>É impressionante. Quando agimos de maneira certa nos tornamos mais amigos de nós mesmos, ficamos mais condescendentes, mais tolerantes e, como recompensa, aumentamos a nossa...</p>
							<div class="botao_ver">
								<a href="#">
									<img src="<?php bloginfo('template_directory');?>/images/botao_ver.png">
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="preco"></div>

		</div>
		<div class="preco">
			<div class="container_12">
				<div class="preco_conteudo grid_6 alpha ">
					<div class="imagem_preco left_fade animated fadeInLeft">
						<img src="<?php bloginfo('template_directory');?>/images/imagem_preco.png">
					</div>
				</div>
				<div class="preco_conteudo grid_6 omega right_fade animated fadeInRight">
					<div class="digite_email ">
						<input type="text" placeholder="Digite o e-mail" class="emails_2">
					</div>
					<div class="botao_solicitar">
						<input type="submit" class="botao_solicitar">
					</div>
					<div class="conteudo_solicitar">
						<p>* Verifique a caixa de entrada do e-mail que você informou.</p>
						<p>Você vai receber uma mensagem de boas vindas e vai poder acessar imediatamente o sistema, sem nenhum compromisso.</p>
						<p>Esse procedimento simula um <i>"double opt-in"</i> e traz segurança para quem envia e para quem recebe <i>e-mails.</i>
						</p>
						<p>A Equipe Innterpretti não envia "Spam" e assegura que nunca irá transferir seu e-mail para terceiros.</p>

						<div class="termos grid_3 alpha">
							<a href="#"><h4>Termo de serviço</h4></a>
						</div>
						<div class="termos grid_3 omega">
							<a href="#"><h4>Política de privacidade</h4></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container_12">
				<div class="grid_6 left_fade animated fadeInLeft">
					<div class="direitos">
						<p>© 2014 - Todos os direitos reservados.</p>
					</div>
					<div class="titulo_footer">
						<img src="<?php bloginfo('template_directory');?>/images/mini_logo.png">
					</div>


					<div class="conteudo_footer">
						<p>Uma alternativa viável, principalmente porque o investimento na interpretação técnica dos resultados da análise de solo é infinitamente menor que os possíveis gastos e prejuízos causados pela ausência desse cuidado específico.</p>
						<br>
						<p>Se isso faz sentido para você, experimente.</p>
						<br>
						<p class="email">contato@innterpretti.com.br</p>
					</div>
				</div>

				<div class="grid_6 right_fade animated fadeInRight">
					<div class="fragmento_footer grid_2 alpha">
						<h3>CONTEÚDO</h3>
						<p><a href='<?php bloginfo('url');?>/blog'>Anotações</a>
						</p>
					</div>
					<div class="fragmento_footer grid_2">
						<h3>SUPORTE</h3>
						<p>Ajuda</p>
					</div>
					<div class="fragmento_footer grid_2 omega">
						<h3>SEGURANÇA </h3>
						<p>Termo de serviço Política de Privacidade</p>
					</div>

				</div>
			</div>
			<div class="container_12">
				<div class="faixa_divisor"></div>

				<div class="desenvolvido left_fade animated fadeInLeft">
					<p>Edifício Multiempresarial - SRTVS Quadra 701. Bloco "O", n. 110. Sala 846 - Parte "M". Asa Sul - Brasília/DF - CEP: 70340-000.</p>
				</div>

				<a href="#banner">
					<div id="botao_topo">
						<img src="<?php bloginfo('template_directory');?>/images/botao_topo.png">
					</div>
				</a>
			</div>
		</div>

	</div>

	<!-- Inicio dos Scripts -->



	<script>
		$('a[href*=#]').on('click', function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 0);
		});
	</script>
	<script src="<?php bloginfo('template_directory');?>/js/jquery.scrollTo-min.js"></script>

</body>

</html>