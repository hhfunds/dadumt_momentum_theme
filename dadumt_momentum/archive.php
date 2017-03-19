<?php get_header(); ?>

<body class="left-sidebar">

	<!-- Header Wrapper -->
	<div id="header-wrapper">
		<div class="container">
			<!-- Start Main Nav -->
			<!-- ��ܥD��� --> 
			<nav id="nav">
			<a href="<?php bloginfo( 'url' ); ?>" style="float:left; max-width:25%; height:auto;"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" style="float:left; max-width:100%; height:auto;"/></a>
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
		<div id="main" class="container">
			<div class="row">
				<div id="sidebar" class="3u">
					<?php dynamic_sidebar('sidebarleft'); ?>
				</div>
				
				<?php if ( have_posts() ) : ?>
					<div class="6u">
						<section>
							<?php while ( have_posts() ) : the_post(); ?>
							<ul class="style2">
								<li>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p style="font-size:14px; "><?php echo(get_the_excerpt()); ?></p>
								</li>
							</ul>
							<?php endwhile; ?>
						</section>
						
						<?php wp_pagenavi(); ?>
					</div>
				<?php else : ?>
				<div class="8u important(collapse)">
					<article id="content">
						<h2>�j�M���G</h2>
						<p>�ܩ�p�A�䤣��A�ҷj�M���峹�A�A�i�H�յۥΨ�L����r�A���j�M�C</p>
						<?php get_search_form(); ?>
					</article>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- End Main Wrapper -->
	
<?php get_footer(); ?>