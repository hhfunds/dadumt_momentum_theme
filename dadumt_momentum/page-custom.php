<?php
/*
Template Name: custom
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

	<div id="header-wrapper">
			<div class="container">
				<!-- Start Main Nav -->
				<!-- 顯示主選單 --> 
				<nav id="nav">
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" style="float:left; max-width:25%; height:auto;"/>
				<?php
				wp_nav_menu( array(
					'menu_class'     => 'nav-menu',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'theme_location' => 'primary-menu',
					) );
				?>
				</nav>
				
				<header id="header">						
				</header>
			</div>
		</div>
			
		<!-- Start Main Wrapper -->
		<div id="main-wrapper">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<!-- End Main Wrapper -->
		
<?php get_footer(); ?>