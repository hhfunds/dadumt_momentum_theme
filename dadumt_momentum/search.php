<?php get_header(); ?>

<body class="left-sidebar">

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
					<h2>搜尋結果</h2>
					<p>很抱歉，找不到你所搜尋的文章，你可以試著用其他關鍵字再次搜尋。</p>
					<?php get_search_form(); ?>
				</article>
			</div>
			
		<?php endif; ?>
		
<?php wp_pagenavi(); ?>
	
<?php get_footer(); ?>