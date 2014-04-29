<?php
/*
Template Name: Ensinamento
*/
?>
<?php get_header();?>
  <section id="conteudo">
	<aside class="side">
	<?php
	$menu = new WP_Query('category_name=ensinamento&showposts=100');
					if($menu->have_posts()):?> 
					
					 <ul>
					<?php while ($menu->have_posts()):
							$menu->the_post();
							?>
							 
								<li>
									<a href="<?php get_permalink();?>?id=<?php the_ID();?>"> <?php the_title();?></a>
							 	</li>
					
			      <?php endwhile;?>
			        </ul>
				   <?php endif;?>
				    
	
	</aside>
	<section class="post">
	<?php
		
		if(!empty($_GET['id'])):
			$args['p'] = $_GET['id'];
		endif;
		
			$args['category_name'] = "ensinamento";
			$args['showposts'] = "1";
		$query = new WP_Query($args);
						if($query->have_posts()): 
							while ($query->have_posts()):
								$query->the_post();
								?>
									
									<h1><?php the_title(); ?></h1>
									<article class="post-conteudo"> 
										<?php the_content();?>
								    </article>
						
				      <?php endwhile;
					    endif;?>
				    
	
	</section>
	<div class="clear"></div>
   </section>
<?php get_footer();?>