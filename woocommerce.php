<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css"/>
<?php wp_head(); ?>	
</head>
<body>
	<div class="page_wrapper">
		<div class="header-wrapper">
			<header>
				<?php wp_nav_menu(array('theme_location' => 'nav_menu')) ?>		
			</header>
		</div>

		
			<?php woocommerce_content(); ?>

		
		<footer>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias similique suscipit voluptate sed libero distinctio obcaecati ratione, quia ut officiis animi est, consequuntur velit illum atque dignissimos neque voluptas. Omnis!</p>
			<?php wp_footer(); ?>
		</footer>
	</div>
</body>
</html>