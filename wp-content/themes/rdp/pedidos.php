<?php
/*
Template Name: Pedidos
*/
?>

<?php get_header(); ?>


<section id="section-frase">
	<article id="frase">
		<span class="conteudo-frase"><p>"Pedi e vos será dado" (Mt 7, 7a)</p></span>
	</article>
</section>

<section id="conteudo">	<h2 id="pedido-h2"> Pedidos de Oração </h2>
<?php if( have_posts() ) while ( have_posts() ) : the_post(); 
		


the_content();?>

			
	
	

<?php endwhile; ?>
<div class='clear'></div> 
</section>	
 <?php get_footer(); ?>
