<?php
/*
Template Name: Sobre
*/
?>
<?php get_header(); ?>

<section id="conteudo">	

<?php if( have_posts() ) while ( have_posts() ) : the_post();?> 

		
 
 <h2 class="titulo-h2">	
<?php the_title();?>
</h2>
<?php the_content();?>	

<?php endwhile; ?>

</section>



	
<?php get_footer(); ?>