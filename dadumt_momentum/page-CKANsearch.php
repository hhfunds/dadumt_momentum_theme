<?php
/*
Template Name: CKAN Search Page
*/
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>

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
					<section>
						<h2>相關文章</h2>
						<ul class="style2">
							<?php get_siderbar_similar_post($post->ID); ?>
						</ul>
					</section>
						</br>
							<?php dynamic_sidebar('sidebarleft'); ?>
						<?php if( is_user_logged_in() ): ?>
						<ul class="style2">
							<?php edit_post_link('編輯文章', '<a>', '</a>'); ?>
							</br>
							<a href="<?php bloginfo( 'url' ); ?>/wp-admin">後台管理</a>
						</ul>
						<?php endif; ?>
				</div>
				
				<div class="9u important(collapse)">
				<?php if (!momentum_ckan_status()): ?>
					<article id="content"><p><?php momentum_ckan_error(); ?></p></article>
				<?php else: ?>
					<article id="content">
						<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						
							<form onsubmit="location.href='<?php echo get_permalink(); ?>&org=' + document.getElementById('org').value + '&search=' + document.getElementById('search').value; return false;">
							<div class="row">
								<div style="line-height:50px; width:20%;">
									<?php if (momentum_ckan_status()): ?>
										<?php dadumtckan_get_organization_combobox(); ?>
									<?php endif; ?>
									<script>
									   $('#org option[value=<?php echo $_GET["org"]?>]').attr('selected', 'selected');
									</script>
								</div>
								<div style="line-height:50px; width:80%;">
									<input type="text" value="<?php echo $_GET["search"]?>" name="search" id="search" placeholder="開放資料集搜尋" autocomplete="off">
								</div>
							</div>
							</form>
							<p style="font-size:10px;">
							搜尋結果共有 
							<?php if($_GET["search"]=='' && $_GET["org"]=='' ): ?>
								<?php echo do_shortcode('[wpckan_number_of_related_datasets]'); ?>
							<?php elseif($_GET["org"]==''): ?>
								<?php echo do_shortcode('[wpckan_number_of_related_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified"]'); ?>
							<?php else: ?>
								<?php echo do_shortcode('[wpckan_number_of_related_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified" organization="'.$_GET["org"].'"]'); ?>
							<?php endif; ?>
							 個資料集
							</p>
						<?php if (empty(of_get_option('datasetsres_link'))): ?>
							<?php if($_GET["search"]=='' && $_GET["org"]=='' ): ?>
								<?php echo do_shortcode('[wpckan_query_datasets query="" include_fields_dataset="title,notes,metadata_modified"]'); ?>
							<?php elseif($_GET["org"]==''): ?>
								<?php echo do_shortcode('[wpckan_query_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified"]'); ?>
							<?php else: ?>
								<?php echo do_shortcode('[wpckan_query_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified" organization="'.$_GET["org"].'"]'); ?>
							<?php endif; ?>
						<?php else: ?>
							<?php if($_GET["search"]=='' && $_GET["org"]=='' ): ?>
								<?php echo do_shortcode('[dadumtckan_query_datasets query="" include_fields_dataset="title,notes,metadata_modified"]'); ?>
							<?php elseif($_GET["org"]==''): ?>
								<?php echo do_shortcode('[dadumtckan_query_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified"]'); ?>
							<?php else: ?>
								<?php echo do_shortcode('[dadumtckan_query_datasets query="'.$_GET["search"].'" include_fields_dataset="title,notes,metadata_modified" organization="'.$_GET["org"].'"]'); ?>
							<?php endif; ?>
						<?php endif; ?>
						<?php endwhile; ?>
						
						<?php if (comments_open()): ?>
						<?php if (of_get_option('FBComments_page_checkbox') == 1): ?>
						<br>
						<!-- Start Facebook Comments -->
						<div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="100%" data-numposts="<?php echo of_get_option('FBComments_number'); ?>" data-colorscheme="<?php echo of_get_option('FBComments_colorscheme'); ?>" ></div>
						<!-- End Facebook Comments -->
						<?php endif; ?>
						<?php endif; ?>
					</article>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Main Wrapper -->
	
	<?php if (of_get_option('FBComments_page_checkbox') == 1): ?>
	<!-- Start Facebook Comments JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.7";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End Facebook Comments JavaScript -->
	<?php endif; ?>
	
<?php get_footer(); ?>