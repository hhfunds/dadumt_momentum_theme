<?php get_header(); ?>

	<body class="left-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">

					<!-- Nav -->
						<nav id="nav">
								<?php
									// Primary navigation menu.
									wp_nav_menu( array(
										'menu_class'     => 'nav-menu',
										'container' => '',
										'container_class' => '',
										'container_id' => '',
										'theme_location' => 'primary-menu',
									) );
								?>
							</nav><!-- .main-navigation -->
						
					<!-- Header -->
						<header id="header">
						<!--
							<h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo('name'); ?></a></h1>
						-->
						</header>

				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">

				<!-- Main -->
					<div id="main" class="container">
						<div class="row">
							<div id="sidebar" class="4u">
								
								<?php dynamic_sidebar('sidebarleft'); ?>
								
							</div>
							<div class="8u important(collapse)">
								<article id="content">
									<h2>Oops! 找不到這個頁面</h2>
									<p>您所要找的頁面可能已經被<strong>移除</strong>了或<strong>暫時</strong>無法使用</p>
								</article>
							</div>
						</div>
						
					</div>

			</div>

<?php get_footer(); ?>
