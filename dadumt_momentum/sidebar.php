<aside id="sidebar">
	<section id="intro">
		<?php dynamic_sidebar('sidebartitle'); ?>
		<header>
			<h2><?php bloginfo( 'title' ); ?></h2>
			<p><?php bloginfo( 'description' ); ?></p>
		</header>
	</section>
<?php dynamic_sidebar('sidebar'); ?>
</aside>