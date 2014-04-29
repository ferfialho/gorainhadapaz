<?php get_header();?>
	
	<!-- /**********************************************************************
							Frase
	***********************************************************************/ -->
		<section id="section-frase">
			<article id="frase">
				
				<?php 
					$frase = new WP_Query('category_name=frase&showposts=1');
					if($frase->have_posts()):
						while ($frase->have_posts()):
								$frase->the_post();?>
								<span class="conteudo-frase"><?php the_content();?></span>
						<?php 
						endwhile;
					else:
						echo "Deus é Amor";
					endif;?>
			
			</article>
		</section>

<section id="conteudo">
	
	<!-- /**********************************************************************
							slides 
	***********************************************************************/ -->
 	
			<article  id="slide" class="entry">
					<?php		
						$eventos = new WP_Query('category_name=eventos&showposts=2');
							if($eventos->have_posts()): 
								while ($eventos->have_posts()):
									$eventos->the_post();
									if (has_post_thumbnail()):?>
										<a href="<?php the_permalink();?>"> <?php the_post_thumbnail(array(800,270));?></a>
									 
							<?php   endif;?>
						  <?php endwhile;
							endif;?>
			</article>
	
	<!-- /*************************************************************************
	       limpa o float 
	 *************************************************************************/ -->
			<div class="clear"> </div>
	  	
		
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#slide a:eq(0)").addClass("ativo").show();

			var texto = $(".ativo img").attr("alt");

			$("#slide").prepend("<p>"+texto+"</p>");

			setInterval(slide,5000);
		});

		function slide(){

			if($(".ativo").next().size()){

				$(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo");				
						
				}else {
					$(".ativo").fadeOut().removeClass("ativo");
					$("#slide a:eq(0)").fadeIn().addClass("ativo");
				}
				
			var texto = $(".ativo img").attr("alt");

			$("#slide p").hide().html(texto).delay(500).fadeIn();
			
		}
	</script>
  
    <!-- -----------------------------------------------------------------------
	  --    Side bar 
	  -------------------------------------------------------------------------->
			<section id="sidebar">
				<a href="<?php echo get_home_url()?>/testemunhos" ><div id="testemunho"></div></a>
				<a href="<?php echo get_home_url()?>/pedidos" ><div id="pedido"></div></a>
				<a href="http://www.rccbrasil.org.br/portal/" target="_blank"><div id="rcc"></div></a>
				<a href="http://paroquiansrosario.com/" target="_blank"><div id="paroquia"></div></a>
			</section>

	<!-- -----------------------------------------------------------------------
	  --    Fotos
	  -------------------------------------------------------------------------->	
		 
	<h2 class="titulo">Fotos<h2> 
	<article id="foto">
		<?php 
			$foto = new WP_Query('p=1');
					if($foto->have_posts()): 
						while ($foto->have_posts()):
							$foto->the_post();
							?>
								
							<div id="conteudo-foto">	
								<?php the_content();?>
							</div>
							
							 
					  
			      <?php endwhile;
				    endif;?>
			
		<div class="clear"></div>
	</article>
	
	
	<!--------------------------------------------------------------------
	  --  Videos
	  -------------------------------------------------------------------->
			<h2 class="titulo">Videos<h2> 
			<article id="video">
				<div class="video-destaque">
					<?php 
						$video = new WP_Query('category_name=videos&showposts=1');
						if($video->have_posts()):
							while ($video->have_posts()):
								$video->the_post();
								if (has_post_thumbnail()):?>
								 	<a href="<?php the_permalink();?>" class="link">
										<span class="descricao"><?php the_title();?> </span>
										<?php the_post_thumbnail(array('295','240'));?>
										
										<br>
										<span class="resumo"><?php the_excerpt();?></span> 
									 </a>		   
								 	
										
										
										<div class="clear"></div>	
							 
					  <?php endif;?>
			      <?php endwhile;
				    endif;?>					
			
		       </div>
		
		<div class="video-noticia">
		<?php 
			$video = new WP_Query('category_name=videos&showposts=3');
					if($video->have_posts()): 
						while ($video->have_posts()):
							$video->the_post();
							if (has_post_thumbnail()):?>
							
							<a href="<?php the_permalink();?>" class="link">
							<div class="box-video-noticia">

								<span class="descricao-min"><?php the_title();?> </span> 
								<div class="resumo-min">
									<?php the_post_thumbnail(array('100','100'));?>
									<?php the_excerpt();?>
								</div>
									
							<div class="clear"></div>	   
							</div>
							</a>
							
							<div class="clear"></div>	
							
							 
					  <?php endif;?>
			      <?php endwhile;
				    endif;?>
		</div>	
		<div class="clear"></div>
	
	</article>
    
	



	
		
		
	
	
<div class="clear"></div>	
</section>
<div class="clear"></div>

<?php get_footer();?>
