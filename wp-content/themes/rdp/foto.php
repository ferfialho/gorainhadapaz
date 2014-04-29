<?php
/*
Template Name: Foto
*/
?>

<?php get_header(); ?>

<h2 id="pedido-h2"> Galeria de Fotos </h2>
<section id="conteudo">
<?php if( have_posts() ) while ( have_posts() ) : the_post(); 
		


the_content();?>

			
	
	

<?php endwhile; ?>
</section>
<div class="clear"></div>	
 <?php get_footer(); ?>
