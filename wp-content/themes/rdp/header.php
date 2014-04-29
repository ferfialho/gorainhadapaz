<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('name')?> | <?php bloginfo('description')?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="all">
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/script.js"></script>
	<?php wp_head();?>
</head>
<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48863139-1', 'gorainhadapaz.com.br');
  ga('send', 'pageview');

</script>
<header id="top">
	
	
	<div id='logo'><a href="<?php get_option('home');?>"><img src="<?php bloginfo('template_directory')?>/img/logo-2.png"></a></div>

</header>
<div class="menu-principal">
	<nav id="menu-principal">
		<ul>
			<li><a href="<?php echo home_url();?>">Home</a></li>
			<?php wp_list_pages('title_li=&exclude=2');?>
		
		</ul>
	</nav>
    </div>

