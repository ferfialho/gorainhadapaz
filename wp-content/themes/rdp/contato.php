<?php
/*
Template Name: Contato
*/
?>
<?php get_header();?>




<section id="conteudo">

<h2 id="pedido-h2"> Contato </h2>
	
		
	





<?php if( have_posts() ) while ( have_posts() ) : the_post(); 
		


the_content();?>

			
	
	

<?php endwhile;
	 ?>
	 <br>
<div class="clear"> </div>	 
</section>
	
<?php get_footer();?>