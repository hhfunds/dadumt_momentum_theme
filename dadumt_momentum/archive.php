<?php get_header(); ?>

	<body class="left-sidebar">

		<!-- Header Wrapper -->
		<div id="header-wrapper">
			<div class="container">
				<!-- Start Main Nav -->
				<!-- ��ܥD��� --> 
				<nav id="nav">
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
		
		<!-- Main Wrapper -->
		<div id="main-wrapper">
	
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="8u important(collapse)">
				<article id="content">
					<h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="article-meta">
							<span><?php the_time('Y-j-n'); ?></span><span> _ </span>
							<span><?php the_category(' , '); ?></span><span> _ </span>
							<span><?php the_tags('', ' , ', ''); ?></span>
						</div>
				</article>
			<?php endwhile; ?>
			
		<?php else : ?>
		
			<div class="8u important(collapse)">
				<article id="content">
					<h2>�j�M���G</h2>
					<p>�ܩ�p�A�䤣��A�ҷj�M���峹�A�A�i�H�յۥΨ�L����r�A���j�M�C</p>
					<?php get_search_form(); ?>
				</article>
			</div>
			
		<?php endif; ?>
		
<?php wp_pagenavi(); ?>
	
<?php get_footer(); ?>