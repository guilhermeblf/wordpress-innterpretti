<?php /*template name:blog*/ get_header();?>
<div class="faixa_azul">
	<div class="container_12">
		<div class="grid_6">
			<div class="imagem_nave">
				<img src="<?php bloginfo('template_directory');?>/images/imagem_nave.png">
			</div>
		</div>
		<div class="grid_6">
			<div class="conteudo_busca">
				<h1>Anotações</h1>
				<h6>Adquira novos conhecimentos ou revise aqueles já assimilados.</h6>

				<div class="busca">

					<div class="digite_busca grid_4 alpha">
						<input type="text" placeholder="Procure por palavra-chave" id="procurar_input">
					</div>
					<a href="#">

						<div class="botao_procurar grid_2 omega push_3">
							<input type="submit" value="Procurar" id="botao_procurar">
						</div>
					</a>
					<div class="clear"></div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="clear"></div>


<div class="container_12">
	<div class="grid_7">
		<div class="conteudo_blog">
			<div class="grid_7 alpha omega titulo_destacados">
				<div class="ponto_azul grid_1 alpha">
					<img src="<?php bloginfo('template_directory');?>/images/ponto_azul.jpg">
				</div>
				<div class="titulo_destaque grid_6 omega">
					<h4>DESTAQUE</h4>
				</div>
			</div>
		<?php 
		query_posts('post_type=destaques&showposts=1&order=desc');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="materia">


				<div class="clear"></div>

				<div class="titulo_materia">
					<h4><?php the_title();?></h4>
				</div>

				<div class="grid_2 imagem_materia alpha">
					<?php the_post_thumbnail();?>
				</div>
				<div class="grid_5 conteudo_mateira omega">
					<p><?php the_field('resumo');?></p>
				</div>
				<div class="saiba_mais">
					<a href="<?php the_permalink();?>">
							<img src="<?php bloginfo('template_directory');?>/images/saiba_mais.png">
						</a>
				</div>
				<div class="separacao"></div>

			</div>
			<?php endwhile; else: ?> 
			
			<p><?php _e('Nenhuma notícia em destaque publicada.'); ?></p> 

			<?php endif; ?>
			

			<div class="grid_7 alpha omega titulo_destacados">
				<div class="ponto_azul grid_1 alpha">
					<img src="<?php bloginfo('template_directory');?>/images/ponto_azul.jpg">
				</div>
				<div class="titulo_destaque grid_6 omega">
					<h4>MAIS ANOTAÇÕES</h4>
				</div>
			</div>
			
		<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts('post_type=noticias&showposts=3&order=desc&paged=$paged');
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="materia">

				<div class="clear"></div>
				<div class="titulo_materia">
					<h4><?php the_title();?></h4>
				</div>

				<div class="grid_2 imagem_materia alpha">
					<?php the_post_thumbnail();?>
				</div>
				<div class="grid_5 conteudo_mateira omega">
					<p><?php the_field('resumo');?></p>

				</div>
				<div class="saiba_mais">
					<a href="<?php the_permalink();?>">
							<img src="<?php bloginfo('template_directory');?>/images/saiba_mais.png">
						</a>
				</div>
				<div class="separacao"></div>

			</div>
		<?php endwhile; else: ?> 
		<p><?php _e('Nenhuma notícia publicada.'); ?></p> 

		<?php endif; ?>
			
		</div>

	</div>
	<div class="grid_5">
		<div class="midias_sociais">
			<a href="https://www.facebook.com/innterpretti?ref=ts&fref=ts">
				<div class="midia grid_2 ">
					<div class="direita">
						<img src="<?php bloginfo('template_directory');?>/images/icone_facebook.jpg">
					</div>
				</div>
			</a>
			<a href="https://www.youtube.com/user/Innterpretti">
				<div class="midia grid_2 ">
					<img src="<?php bloginfo('template_directory');?>/images/icone_youtube.jpg">
				</div>
			</a>

			<div class="midia_escondida">
				<a href="#">
					<div class="midia grid_2 ">
						<div class="direita">

							<img src="<?php bloginfo('template_directory');?>/images/icone_google.jpg">
						</div>
					</div>
				</a>
				<a href="#">
					<div class="midia grid_2 ">
						<img src="<?php bloginfo('template_directory');?>/images/icone_twitter.jpg">
					</div>
				</a>

			</div>

		</div>

	</div>
</div>
	<div class="container_12" id="numeracao_pagina">
		<div class="grid_7">
			<div class="wp-pagenavi">
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
			</div>	
		</div>
	</div>

<?php get_footer();?>