<?php
/*
Template Name: Testemunho
*/
?>
<?php get_header();?>

<section id="section-frase">
	<article id="frase">
		<span class="conteudo-frase"><p>"Também vós darei testemunho, por que estáis comigo desde o principio" (Jo 15, 27)</p></span>
	</article>
</section>

<section id="conteudo"><h2 id="pedido-h2"> Testemunhos </h2>
			<?php $query = new WP_Query('category_name=testemunhos&showposts=10');
					if($query->have_posts()): 
						while ($query->have_posts()):
							$query->the_post();?>
								
								<div class="box-testemunho">
									<div class="box-testemunho-conteudo"> 
									<h2><?php the_title();?></h2>
									
									<?php the_excerpt();?>
									</div>
									<a href="<?php the_permalink();?>" class="botao-testemunho">Continue lendo...</a>
								</div>
								
							 
					
			      <?php endwhile;
				    endif;?>
<div class="form1"> 
<?php echo do_shortcode('[contact-form-7 id="49" title="Testemunho"]');?>
<div class="clear"></div>
</div>
</section>	
<div class="clear"></div>
<?php get_footer();?>