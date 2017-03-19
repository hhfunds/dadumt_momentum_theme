<?php 
/* 
 * Momentum dadumt Theme based on the HTML template Momentum from http://pixelarity.com
 * Modified by Z.yao
 * Version: 0.3.5
 * Date: 2017-03-19
 * Licensed: http://pixelarity.com/license
 */
?>
<?php get_header('home'); ?>

	<body class="homepage">
		<!-- Header Wrapper -->
		<div id="header-wrapper">
			<div class="container">
				<!-- Start Main Nav -->
				<!-- 顯示主選單 --> 
				<nav id="nav">
				<a id="header_image" href="<?php bloginfo( 'url' ); ?>" style="float:left; max-width:25%; height:auto;"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>Logo" style="float:left; max-width:100%; height:auto;"/></a>
				
				<?php
					wp_nav_menu( array(
					'menu_class'     => '',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'theme_location' => 'primary-menu',
					) );
				?>
				</nav>
				<!-- End Main Nav -->
				
				<header id="header">
				</header>
			</div>
		</div>
		
		<!-- Start Banner -->
		<div id="banner-wrapper">
			<div id="banner" class="container">
				
				<!-- Start Slider-->
					<?php get_template_part( 'index', 'slider' ); ?>
				<!-- End Slider-->
				
				<!-- Start Highlight-->
					<?php get_template_part( 'index', 'highlight' ); ?>
				<!-- End Highlight-->
				
			</div>
		</div>
		<!-- End Banner -->
		
		<!-- Featured Wrapper--> 
		<div id="featured-wrapper">
			<div id="featured" class="container">
				<div class="row">
					<div class="3u">
						<?php dynamic_sidebar('news_left'); ?>
					</div>
					
					<?php get_template_part( 'index', 'news' ); ?>
					
				</div>
			</div>
		</div>
		<!-- End Featured Wrapper--> 
		
		
		<!-- Project Wrapper -->
			<?php get_template_part( 'index', 'project' ); ?>
		<!-- End Project Wrapper -->
		
		<!-- CKAN Datasets Info Wrapper -->
			<?php get_template_part( 'index', 'ckandataset' ); ?>
		<!-- End CKAN Datasets Info Wrapper -->
		
			
<?php get_footer(); ?>
