<?php
/*
Template Name: CKAN Resource Page
*/
?>

<?php get_header('CKAN'); ?>

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
						<h2>資料集:<?php echo $_GET["title"]; ?></h2>
						
						<?php echo do_shortcode('[dadumtckan_query_datasets_res query="'.$_GET["id"].'" include_fields_resources="name,description,metadata_modified,format"]'); ?>
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
	<style>

		html
		{
			/* killing 300ms touch delay in IE */
			-ms-touch-action: manipulation;
			touch-action: manipulation;
		}
		
		.btn
		{
			text-transform: uppercase;
			color: #efefef;
			background-color: #333;
			padding: 0.313em 0.625em; /* 5 10 */
		}
			.btn:hover,
			.btn:focus	{ background-color: #c00; }
			.btn:active	{ background-color: #a00; }


		#container
		{
			width: 100%; /* 660 */
			text-align: center;
			padding: 0 1.25em; /* 20 */
			margin: 3.125em auto 6.25em; /* 50 100 */
		}
			#container h1
			{
				font-size: 2.125em; /* 34 */
				line-height: 0.882em; /* 30 (34) */
				text-transform: uppercase;
			}
				#container h1 span
				{
					font-size: 0.588em; /* 20 (34) */
					line-height: 1em; /* 20 (20) */
					color: #aaa;
					display: block;
				}
				#container h1 a:hover span,
				#container h1 a:focus span { color: #333; }

			#container h2
			{
				border-top: 1px solid #ddd;
				padding-top: 1.875em; /* 30 */
				margin-top: 1.875em; /* 30 */
				margin-bottom: 0.625em; /* 10 */
			}
				#container h2 span
				{
					color: #666;
				}
				#container h2[data-caption]:before
				{
					font-size: 0.875rem;
					font-weight: 300;
					color: #fff;
					background-color: #c00;
					display: inline-block;
					content: attr( data-caption );
					padding: 0.125rem 0.313rem; /* 2 5 */
					margin-right: 0.625rem; /* 10 */

					-webkit-transform: rotate( -8deg );
					-ms-transform: rotate( -8deg );
					transform: rotate( -8deg );
				}

			#container ul
			{
			}
				#container li
				{
					display: inline-block;
					margin: 0.625em; /* 10 */
				}
					#container img
					{
						width: 8.75em; /* 140 */
						height: 8.75em; /* 140 */
						border-color: #eee;
						border: 0.625em solid rgba( 255, 255, 255, .5 ); /* 10 */

						-webkit-box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 ); /* 5 */
						box-shadow: 0 0 0.313em rgba( 0, 0, 0, .05 ); /* 5 */

						-webkit-transition: -webkit-box-shadow .3s ease, border-color .3s ease;
						transition: box-shadow .3s ease, border-color .3s ease;
					}
						#container img:hover,
						#container img:focus
						{
							border-color: #fff;

							-webkit-box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 ); /* 15 */
							box-shadow: 0 0 0.938em rgba( 0, 0, 0, .25 ); /* 15 */
						}

		/* IMAGE LIGHTBOX SELECTOR */

		#imagelightbox
		{
			cursor: pointer;
			position: fixed;
			z-index: 10000;

			-ms-touch-action: none;
			touch-action: none;

			-webkit-box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
			box-shadow: 0 0 3.125em rgba( 0, 0, 0, .75 ); /* 50 */
		}


		/* ACTIVITY INDICATION */

		#imagelightbox-loading,
		#imagelightbox-loading div
		{
			border-radius: 50%;
		}
		#imagelightbox-loading
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			position: fixed;
			z-index: 10003;
			top: 50%;
			left: 50%;
			padding: 0.625em; /* 10 */
			margin: -1.25em 0 0 -1.25em; /* 20 */

			-webkit-box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
			box-shadow: 0 0 2.5em rgba( 0, 0, 0, .75 ); /* 40 */
		}
			#imagelightbox-loading div
			{
				width: 1.25em; /* 20 */
				height: 1.25em; /* 20 */
				background-color: #fff;

				-webkit-animation: imagelightbox-loading .5s ease infinite;
				animation: imagelightbox-loading .5s ease infinite;
			}

			@-webkit-keyframes imagelightbox-loading
			{
				from { opacity: .5;	-webkit-transform: scale( .75 ); }
				50%	 { opacity: 1;	-webkit-transform: scale( 1 ); }
				to	 { opacity: .5;	-webkit-transform: scale( .75 ); }
			}
			@keyframes imagelightbox-loading
			{
				from { opacity: .5;	transform: scale( .75 ); }
				50%	 { opacity: 1;	transform: scale( 1 ); }
				to	 { opacity: .5;	transform: scale( .75 ); }
			}


		/* OVERLAY */

		#imagelightbox-overlay
		{
			background-color: #fff;
			background-color: rgba( 255, 255, 255, .9 );
			position: fixed;
			z-index: 9998;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}


		/* "CLOSE" BUTTON */

		#imagelightbox-close
		{
			width: 2.5em; /* 40 */
			height: 2.5em; /* 40 */
			text-align: left;
			background-color: #666;
			border-radius: 50%;
			position: fixed;
			z-index: 10002;
			top: 2.5em; /* 40 */
			right: 2.5em; /* 40 */

			-webkit-transition: color .3s ease;
			transition: color .3s ease;
		}
		#imagelightbox-close:hover,
		#imagelightbox-close:focus { background-color: #111; }

			#imagelightbox-close:before,
			#imagelightbox-close:after
			{
				width: 2px;
				background-color: #fff;
				content: '';
				position: absolute;
				top: 20%;
				bottom: 20%;
				left: 50%;
				margin-left: -1px;
			}
			#imagelightbox-close:before
			{
				-webkit-transform: rotate( 45deg );
				-ms-transform: rotate( 45deg );
				transform: rotate( 45deg );
			}
			#imagelightbox-close:after
			{
				-webkit-transform: rotate( -45deg );
				-ms-transform: rotate( -45deg );
				transform: rotate( -45deg );
			}


		/* CAPTION */

		#imagelightbox-caption
		{
			text-align: center;
			color: #fff;
			background-color: #666;
			position: fixed;
			z-index: 10001;
			left: 0;
			right: 0;
			bottom: 0;
			padding: 0.625em; /* 10 */
		}


		/* NAVIGATION */

		#imagelightbox-nav
		{
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			border-radius: 20px;
			position: fixed;
			z-index: 10001;
			left: 50%;
			bottom: 3.75em; /* 60 */
			padding: 0.313em; /* 5 */

			-webkit-transform: translateX( -50% );
			-ms-transform: translateX( -50% );
			transform: translateX( -50% );
		}
			#imagelightbox-nav button
			{
				width: 1em; /* 20 */
				height: 1em; /* 20 */
				background-color: transparent;
				border: 1px solid #fff;
				border-radius: 50%;
				display: inline-block;
				margin: 0 0.313em; /* 5 */
			}
			#imagelightbox-nav button.active
			{
				background-color: #fff;
			}


		/* ARROWS */

		.imagelightbox-arrow
		{
			width: 3.75em; /* 60 */
			height: 7.5em; /* 120 */
			background-color: #444;
			background-color: rgba( 0, 0, 0, .5 );
			vertical-align: middle;
			display: none;
			position: fixed;
			z-index: 10001;
			top: 50%;
			margin-top: -3.75em; /* 60 */
		}
		.imagelightbox-arrow:hover,
		.imagelightbox-arrow:focus	{ background-color: rgba( 0, 0, 0, .75 ); }
		.imagelightbox-arrow:active { background-color: #111; }

			.imagelightbox-arrow-left	{ left: 2.5em; /* 40 */ }
			.imagelightbox-arrow-right	{ right: 2.5em; /* 40 */ }

			.imagelightbox-arrow:before
			{
				width: 0;
				height: 0;
				border: 1em solid transparent;
				content: '';
				display: inline-block;
				margin-bottom: -0.125em; /* 2 */
			}
				.imagelightbox-arrow-left:before
				{
					border-left: none;
					border-right-color: #fff;
					margin-left: -0.313em; /* 5 */
				}
				.imagelightbox-arrow-right:before
				{
					border-right: none;
					border-left-color: #fff;
					margin-right: -0.313em; /* 5 */
				}

		#imagelightbox-loading,
		#imagelightbox-overlay,
		#imagelightbox-close,
		#imagelightbox-caption,
		#imagelightbox-nav,
		.imagelightbox-arrow
		{
			-webkit-animation: fade-in .25s linear;
			animation: fade-in .25s linear;
		}
			@-webkit-keyframes fade-in
			{
				from	{ opacity: 0; }
				to		{ opacity: 1; }
			}
			@keyframes fade-in
			{
				from	{ opacity: 0; }
				to		{ opacity: 1; }
			}

		@media only screen and (max-width: 41.250em) /* 660 */
		{
			#container
			{
				width: 100%;
			}
			#imagelightbox-close
			{
				top: 1.25em; /* 20 */
				right: 1.25em; /* 20 */
			}
			#imagelightbox-nav
			{
				bottom: 1.25em; /* 20 */
			}

			.imagelightbox-arrow
			{
				width: 2.5em; /* 40 */
				height: 3.75em; /* 60 */
				margin-top: -2.75em; /* 30 */
			}
			.imagelightbox-arrow-left	{ left: 1.25em; /* 20 */ }
			.imagelightbox-arrow-right	{ right: 1.25em; /* 20 */ }
		}

		@media only screen and (max-width: 20em) /* 320 */
		{
			.imagelightbox-arrow-left	{ left: 0; }
			.imagelightbox-arrow-right	{ right: 0; }
		}

	</style>
	<script>

	$( function()
	{
		var
			// ACTIVITY INDICATOR

			activityIndicatorOn = function()
			{
				$( '<div id="imagelightbox-loading"><div></div></div>' ).appendTo( 'body' );
			},
			activityIndicatorOff = function()
			{
				$( '#imagelightbox-loading' ).remove();
			},


			// OVERLAY

			overlayOn = function()
			{
				$( '<div id="imagelightbox-overlay"></div>' ).appendTo( 'body' );
			},
			overlayOff = function()
			{
				$( '#imagelightbox-overlay' ).remove();
			},


			// CLOSE BUTTON

			closeButtonOn = function( instance )
			{
				$( '<button type="button" id="imagelightbox-close" title="Close"></button>' ).appendTo( 'body' ).on( 'click touchend', function(){ $( this ).remove(); instance.quitImageLightbox(); return false; });
			},
			closeButtonOff = function()
			{
				$( '#imagelightbox-close' ).remove();
			},


			// CAPTION

			captionOn = function()
			{
				var description = $( 'a[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"] img' ).attr( 'alt' );
				if( description.length > 0 )
					$( '<div id="imagelightbox-caption">' + description + '</div>' ).appendTo( 'body' );
			},
			captionOff = function()
			{
				$( '#imagelightbox-caption' ).remove();
			},


			// NAVIGATION

			navigationOn = function( instance, selector )
			{
				var images = $( selector );
				if( images.length )
				{
					var nav = $( '<div id="imagelightbox-nav"></div>' );
					for( var i = 0; i < images.length; i++ )
						nav.append( '<button type="button"></button>' );

					nav.appendTo( 'body' );
					nav.on( 'click touchend', function(){ return false; });

					var navItems = nav.find( 'button' );
					navItems.on( 'click touchend', function()
					{
						var $this = $( this );
						if( images.eq( $this.index() ).attr( 'href' ) != $( '#imagelightbox' ).attr( 'src' ) )
							instance.switchImageLightbox( $this.index() );

						navItems.removeClass( 'active' );
						navItems.eq( $this.index() ).addClass( 'active' );

						return false;
					})
					.on( 'touchend', function(){ return false; });
				}
			},
			navigationUpdate = function( selector )
			{
				var items = $( '#imagelightbox-nav button' );
				items.removeClass( 'active' );
				items.eq( $( selector ).filter( '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ).index( selector ) ).addClass( 'active' );
			},
			navigationOff = function()
			{
				$( '#imagelightbox-nav' ).remove();
			},


			// ARROWS

			arrowsOn = function( instance, selector )
			{
				var $arrows = $( '<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>' );

				$arrows.appendTo( 'body' );

				$arrows.on( 'click touchend', function( e )
				{
					e.preventDefault();

					var $this	= $( this ),
						$target	= $( selector + '[href="' + $( '#imagelightbox' ).attr( 'src' ) + '"]' ),
						index	= $target.index( selector );

					if( $this.hasClass( 'imagelightbox-arrow-left' ) )
					{
						index = index - 1;
						if( !$( selector ).eq( index ).length )
							index = $( selector ).length;
					}
					else
					{
						index = index + 1;
						if( !$( selector ).eq( index ).length )
							index = 0;
					}

					instance.switchImageLightbox( index );
					return false;
				});
			},
			arrowsOff = function()
			{
				$( '.imagelightbox-arrow' ).remove();
			};


		//	WITH ACTIVITY INDICATION

		$( 'a[data-imagelightbox="a"]' ).imageLightbox(
		{
			onLoadStart:	function() { activityIndicatorOn(); },
			onLoadEnd:		function() { activityIndicatorOff(); },
			onEnd:	 		function() { activityIndicatorOff(); }
		});


		//	WITH OVERLAY & ACTIVITY INDICATION

		$( 'a[data-imagelightbox="b"]' ).imageLightbox(
		{
			onStart: 	 function() { overlayOn(); },
			onEnd:	 	 function() { overlayOff(); activityIndicatorOff(); },
			onLoadStart: function() { activityIndicatorOn(); },
			onLoadEnd:	 function() { activityIndicatorOff(); }
		});


		//	WITH "CLOSE" BUTTON & ACTIVITY INDICATION

		var instanceC = $( 'a[data-imagelightbox="c"]' ).imageLightbox(
			{
				quitOnDocClick:	false,
				onStart:		function() { closeButtonOn( instanceC ); },
				onEnd:			function() { closeButtonOff(); activityIndicatorOff(); },
				onLoadStart: 	function() { activityIndicatorOn(); },
				onLoadEnd:	 	function() { activityIndicatorOff(); }
			});


		//	WITH CAPTION & ACTIVITY INDICATION

		$( 'a[data-imagelightbox="d"]' ).imageLightbox(
		{
			onLoadStart: function() { captionOff(); activityIndicatorOn(); },
			onLoadEnd:	 function() { captionOn(); activityIndicatorOff(); },
			onEnd:		 function() { captionOff(); activityIndicatorOff(); }
		});


		//	WITH ARROWS & ACTIVITY INDICATION

		var selectorG = 'a[data-imagelightbox="g"]';
		var instanceG = $( selectorG ).imageLightbox(
			{
				onStart:		function(){ arrowsOn( instanceG, selectorG ); },
				onEnd:			function(){ arrowsOff(); activityIndicatorOff(); },
				onLoadStart: 	function(){ activityIndicatorOn(); },
				onLoadEnd:	 	function(){ $( '.imagelightbox-arrow' ).css( 'display', 'block' ); activityIndicatorOff(); }
			});


		//	WITH NAVIGATION & ACTIVITY INDICATION

		var selectorE = 'a[data-imagelightbox="e"]';
		var instanceE = $( selectorE ).imageLightbox(
			{
				onStart:	 function() { navigationOn( instanceE, selectorE ); },
				onEnd:		 function() { navigationOff(); activityIndicatorOff(); },
				onLoadStart: function() { activityIndicatorOn(); },
				onLoadEnd:	 function() { navigationUpdate( selectorE ); activityIndicatorOff(); }
			});


		//	ALL COMBINED

		var selectorF = 'a[data-imagelightbox="f"]';
		var instanceF = $( selectorF ).imageLightbox(
			{
				onStart:		function() { overlayOn(); closeButtonOn( instanceF ); arrowsOn( instanceF, selectorF ); },
				onEnd:			function() { overlayOff(); captionOff(); closeButtonOff(); arrowsOff(); activityIndicatorOff(); },
				onLoadStart: 	function() { captionOff(); activityIndicatorOn(); },
				onLoadEnd:	 	function() { captionOn(); activityIndicatorOff(); $( '.imagelightbox-arrow' ).css( 'display', 'block' ); }
			});


		//	DYNAMICALLY ADDED ITEMS

		var instanceH = $( 'a[data-imagelightbox="h"]' ).imageLightbox(
			{
				quitOnDocClick:	false,
				onStart:		function() { closeButtonOn( instanceH ); },
				onEnd:			function() { closeButtonOff(); activityIndicatorOff(); },
				onLoadStart: 	function() { activityIndicatorOn(); },
				onLoadEnd:	 	function() { activityIndicatorOff(); }
			});

		$( '.js--add-dynamic ' ).on( 'click', function( e )
		{
			e.preventDefault();
			var items = $( '.js--dynamic-items' );
			instanceH.addToImageLightbox( items.find( 'a' ) );
			$( '.js--dynamic-place' ).append( items.find( 'li' ).detach() );
			$( this ).remove();
			items.remove();
		});

	});

	</script>
<?php get_footer(); ?>