<?php get_header(); ?>

<body class="left-sidebar">

	<!-- Header Wrapper -->
	<div id="header-wrapper">
		<div class="container">
			<!-- Start Main Nav -->
			<!-- 顯示主選單 --> 
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
				
				<div class="9u important(collapse)">
					<article id="content" style="padding:0 0 0 0; ">
						<?php if ( have_posts() ) : ?>
						<div class="8u important(collapse)">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="content" style="padding:0 0 0 0; margin-bottom:1em; ">
								<h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<div class="article-meta">
										<span><?php the_time('Y-j-n'); ?></span>
										<?php if(has_category()): ?>
										<span> _ </span><span><?php the_category(' , '); ?></span>
										<?php endif; ?>
										<?php if(has_tag()): ?>
										<span> _ </span><span><?php the_tags('', ' , ', ''); ?></span>
										<?php endif; ?>
									</div>
									<p style="margin-bottom:1em; font-size:14px;"><?php echo(get_the_excerpt()); ?></p>
							</article>
						<?php endwhile; ?>
			
						<?php else : ?>
		
						<div class="8u important(collapse)">
							<article id="content">
								<h2>搜尋結果</h2>
								<p>很抱歉，找不到你所搜尋的文章，你可以試著用其他關鍵字再次搜尋。</p>
								<?php get_search_form(); ?>
							</article>
						</div>
			
						<?php endif; ?>
					</article>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Wrapper -->
		
<?php wp_pagenavi(); ?>
	
<?php get_footer(); ?>