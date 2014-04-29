<?php
/*
Template Name: Eventos
*/
?>
<?php get_header();?>

<section id="conteudo">
			<?php $query = new WP_Query('category_name=eventos&showposts=10');
					if($query->have_posts()): 
						while ($query->have_posts()):
							$query->the_post();?>
								<div class="link-banner">
									<a href="<?php the_permalink();?>" ><?php  the_post_thumbnail(array(800,270));?></a>
								</div>
			<?php endwhile;
				    endif;?>

</section>	
<div class="clear"></div>
<?php get_footer();?>