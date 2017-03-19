<?php 
/* 
 * Momentum dadumt Theme based on the HTML template Momentum from http://pixelarity.com
 * Modified by Z.yao
 * Version: 0.3.2
 * Date: 2017-01-01
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
				<a id="header_image" href="<?php bloginfo( 'url' ); ?>" style="float:left; max-width:25%; height:auto;"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" style="float:left; max-width:100%; height:auto;"/></a>
				
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
							<a href="<?php echo of_get_option('highlight_1_link'); ?>">
								<span class="image fit" id="highlight_1_picture"><img src="<?php echo of_get_option('highlight_1_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_1_title"><?php echo of_get_option('highlight_1_title'); ?></h2>
									<p id="highlight_1_content"><?php echo of_get_option('highlight_1_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 2 -->
					<div class="4u"> 
						<section class="highlight alt">
							<a href="<?php echo of_get_option('highlight_2_link'); ?>">
								<span class="image fit" id="highlight_2_picture"><img src="<?php echo of_get_option('highlight_2_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_2_title"><?php echo of_get_option('highlight_2_title'); ?></h2>
									<p id="highlight_2_content"><?php echo of_get_option('highlight_2_content'); ?></p>
								</header>
							</a>
						</section>
					</div>
					
					<!-- Define highlight item 3 -->
					<div class="4u"> 
						<section class="highlight alt2">
							<a href="<?php echo of_get_option('highlight_3_link'); ?>">
								<span class="image fit" id="highlight_3_picture"><img src="<?php echo of_get_option('highlight_3_picture'); ?>" alt=""></span>
								<header>
									<h2 id="highlight_3_title"><?php echo of_get_option('highlight_3_title'); ?></h2>
									<p id="highlight_3_content"><?php echo of_get_option('highlight_3_content'); ?></p>
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
						<section id="news_1_picture">
							<img class="image fit" src="<?php echo of_get_option('news_1_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_1_link'); ?>"><h3 id="news_1_title"><?php echo of_get_option('news_1_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_1_link2'); ?>"><p id="news_1_content"><?php echo of_get_option('news_1_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_1_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
							
					<div class="3u">
						<section id="news_2_picture">
							<img class="image fit" src="<?php echo of_get_option('news_2_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_2_link'); ?>"><h3 id="news_2_title"><?php echo of_get_option('news_2_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_2_link2'); ?>"><p id="news_2_content"><?php echo of_get_option('news_2_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_2_link'); ?>" class="button icon alt fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
					
					<div class="3u">
						<section id="news_3_picture">
							<img class="image fit" src="<?php echo of_get_option('news_3_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_3_link'); ?>"><h3 id="news_3_title"><?php echo of_get_option('news_3_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_3_link2'); ?>"><p id="news_3_content"><?php echo of_get_option('news_3_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_3_link'); ?>" class="button icon alt2 fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
					
					<div class="3u">
						<section id="news_4_picture">
							<img class="image fit" src="<?php echo of_get_option('news_4_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_4_link'); ?>"><h3 id="news_4_title"><?php echo of_get_option('news_4_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_4_link2'); ?>"><p id="news_4_content"><?php echo of_get_option('news_4_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_4_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
							
					<div class="3u">
						<section id="news_5_picture">
							<img class="image fit" src="<?php echo of_get_option('news_5_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_5_link'); ?>"><h3 id="news_5_title"><?php echo of_get_option('news_5_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_5_link2'); ?>"><p id="news_5_content"><?php echo of_get_option('news_5_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_5_link'); ?>" class="button icon alt fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
					
					<div class="3u">
						<section id="news_6_picture">
							<img class="image fit" src="<?php echo of_get_option('news_6_picture'); ?>" alt="">
							<a href="<?php echo of_get_option('news_6_link'); ?>"><h3 id="news_6_title"><?php echo of_get_option('news_6_title'); ?></h3></a>
							<a href="<?php echo of_get_option('news_6_link2'); ?>"><p id="news_6_content"><?php echo of_get_option('news_6_content'); ?></p></a>
							<footer>
								<a href="<?php echo of_get_option('news_6_link'); ?>" class="button icon alt2 fa-arrow-circle-right">了解更多</a>
							</footer>
						</section>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End Featured Wrapper--> 
		
		<?php if (of_get_option('project_checkbox') == 1): ?>
		<!-- Project Wrapper -->
			<div id="main-wrapper">
					<div id="main" class="container">
						<div class="row">
							<!-- Project Wrapper item 1 -->
							<div class="12u">
								<article id="content">
									<h2 id="project_1_title"><?php echo of_get_option('project_1_title'); ?></h2>
									<a id="project_1_picture" href="<?php echo of_get_option('project_1_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_1_picture'); ?>" alt=""></a>
									<p id="project_1_content"><?php echo of_get_option('project_1_content'); ?></p>
									<footer id="project_1_link">
										<a href="<?php echo of_get_option('project_1_link'); ?>" class="button icon fa-arrow-circle-right">了解更多</a>
									</footer>
								</article>
							</div>
						</div>
						<div class="row">
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 2 -->
										<li class="first">
											<a href="<?php echo of_get_option('project_2_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_2_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_2_link'); ?>"><?php echo of_get_option('project_2_title'); ?></a></h3>
											<p><?php echo of_get_option('project_2_content'); ?></p>
										</li>
										<!-- Project Wrapper item 3 -->
										<li>
											<a href="<?php echo of_get_option('project_3_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_3_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_3_link'); ?>"><?php echo of_get_option('project_3_title'); ?></a></h3>
											<p><?php echo of_get_option('project_3_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 4 -->
										<li class="first">
											<a href="<?php echo of_get_option('project_4_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_4_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_4_link'); ?>"><?php echo of_get_option('project_4_title'); ?></a></h3>
											<p><?php echo of_get_option('project_4_content'); ?></p>
										</li>
										<!-- Project Wrapper item 5 -->
										<li>
											<a href="<?php echo of_get_option('project_5_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_5_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_5_link'); ?>"><?php echo of_get_option('project_5_title'); ?></a></h3>
											<p><?php echo of_get_option('project_5_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 6 -->
										<li class="first">
										</li>
										<li>
											<a href="<?php echo of_get_option('project_6_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_6_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_6_link'); ?>"><?php echo of_get_option('project_6_title'); ?></a></h3>
											<p><?php echo of_get_option('project_6_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
							<div class="6u">
								<section>
									<ul class="style2">
										<!-- Project Wrapper item 7 -->
										<li class="first">
										</li>
										<li>
											<a href="<?php echo of_get_option('project_7_link'); ?>" class="image left"><img src="<?php echo of_get_option('project_7_picture'); ?>" alt=""></a>
											<h3><a href="<?php echo of_get_option('project_7_link'); ?>"><?php echo of_get_option('project_7_title'); ?></a></h3>
											<p><?php echo of_get_option('project_7_content'); ?></p>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</div>

			</div>
			<!-- End Project Wrapper -->
			<?php endif; ?>
			
<?php get_footer(); ?>
