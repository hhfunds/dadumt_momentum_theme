<?php 
/* 
 * Momentum for Honghuafund Theme based on the HTML template Momentum from http://pixelarity.com
 * Modified by Z.yao
 * Version: 0.1.7
 * Date: 2016-08-20
 * Licensed: http://pixelarity.com/license
 */
?>
<?php get_header(); ?>

	<body class="homepage">
		<!-- Header Wrapper -->
		<div id="header-wrapper">
			<div class="container">
				<!-- Start Main Nav -->
				<!-- 顯示主選單 --> 
				<nav id="nav">
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" style="float:left; max-width:25%; height:auto;"/>
				
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
			
				<?php if (of_get_option('slider_checkbox') == 1): ?>
				<!-- Start Slider -->
				<!-- 顯示圖片輪播 --> 
				<div class="row">
					<div class="12u">
						<div id="slider">
							<div class="viewer">
								<div class="reel">
									<!-- Define slider item 1 -->
									<div class="slide">
										<div class="info">
											<h2><?php echo of_get_option('slider_picture1_title'); ?></h2>
											<span><?php echo of_get_option('slider_picture1_content'); ?></span>
										</div>
										<img src="<?php echo of_get_option('slider_picture1'); ?>" alt="" />
									</div>
									
									<!-- Define slider item 2 -->
									<div class="slide">
										<div class="info">
											<h2><?php echo of_get_option('slider_picture2_title'); ?></h2>
											<span><?php echo of_get_option('slider_picture2_content'); ?></span>
										</div>
										<img src="<?php echo of_get_option('slider_picture2'); ?>" alt="" />
									</div>

									<!-- Define slider item 3 -->
									<div class="slide">
										<div class="info">
											<h2><?php echo of_get_option('slider_picture3_title'); ?></h2>
											<span><?php echo of_get_option('slider_picture3_content'); ?></span>
										</div>
										<img src="<?php echo of_get_option('slider_picture3'); ?>" alt="" />
									</div>
											
								</div>
							</div>
							
							<!-- Define slider rotation indicator to be shown on buttom of slider -->
							<div class="indicator">
								<ul>
								<li class="active">1</li>
								<li>2</li>
								<li>3</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- End Slider -->
				<?php endif; ?>
				
				<?php if (of_get_option('highlight_checkbox') == 1): ?>
				<!-- Start Highlight-->
				<div class="row">
					<!-- Define highlight item 1 -->
					<div class="4u">
						<section class="highlight">
							<a href="<?php echo of_get_option('highlight_picture1_link'); ?>">
								<span class="image fit"><img src="<?php echo of_get_option('highlight_picture1'); ?>" alt=""></span>
								<header>
									<h2><?php echo of_get_option('highlight_picture1_title'); ?></h2>
									<p><?php echo of_get_option('highlight_picture1_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 2 -->
					<div class="4u"> 
						<section class="highlight alt">
							<a href="<?php echo of_get_option('highlight_picture2_link'); ?>">
								<span class="image fit"><img src="<?php echo of_get_option('highlight_picture2'); ?>" alt=""></span>
								<header>
									<h2><?php echo of_get_option('highlight_picture2_title'); ?></h2>
									<p><?php echo of_get_option('highlight_picture2_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 3 -->
					<div class="4u"> 
						<section class="highlight alt2">
							<a href="<?php echo of_get_option('highlight_picture3_link'); ?>">
								<span class="image fit"><img src="<?php echo of_get_option('highlight_picture3'); ?>" alt=""></span>
								<header>
									<h2><?php echo of_get_option('highlight_picture3_title'); ?></h2>
									<p><?php echo of_get_option('highlight_picture3_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
				</div>
				<!-- End Highlight-->
				<?php endif; ?>
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
					
					<div id="box1" class="3u">
						<section>
							<img class="image fit" src="<?php echo of_get_option('news_picture1'); ?>" alt="">
							<h3><?php echo of_get_option('news_picture1_title'); ?></h3>
							<p><?php echo of_get_option('news_picture1_content'); ?></p>
							<footer>
								<a href="<?php echo of_get_option('news_picture1_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
							
					<div class="3u">
						<section>
							<img class="image fit" src="<?php echo of_get_option('news_picture2'); ?>" alt="">
							<h3><?php echo of_get_option('news_picture2_title'); ?></h3>
							<p><?php echo of_get_option('news_picture2_content'); ?></p>
							<footer>
								<a href="<?php echo of_get_option('news_picture2_link'); ?>" class="button icon alt fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
					
					<div class="3u">
						<section>
							<img class="image fit" src="<?php echo of_get_option('news_picture3'); ?>" alt="">
							<h3><?php echo of_get_option('news_picture3_title'); ?></h3>
							<p><?php echo of_get_option('news_picture3_content'); ?></p>
							<footer>
								<a href="<?php echo of_get_option('news_picture3_link'); ?>" class="button icon alt2 fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
	
				</div>
			</div>
		</div>
		
<?php get_footer(); ?>
