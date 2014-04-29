<?php
/*
Template Name: Video
*/
?>
<?php get_header();?>

<h2 id="pedido-h2"> Videos </h2>

<section id="conteudo">
        
			<?php $query = new WP_Query('category_name=videos&showposts=5');
					if($query->have_posts()): 
						while ($query->have_posts()):
							$query->the_post();?>
								
								<a href="<?php the_permalink();?>" class="link-video">
								<div class="box-video">
									 
									<div class="box-video-conteudo"> 
									<h2><?php the_title();?></h2>
									<div class="coluna-video"> 
									 <?php the_post_thumbnail(array('300','190'));?>
									</div>
									<div class="coluna-desc-video">
									
									
									<?php the_excerpt();?>
									</div>
									</div>
								
								</div>
								</a>
							 
					
			      <?php endwhile;
				    endif;?>

</section>	
<div class="clear"></div>
<?php get_footer();?>