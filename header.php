<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('', true, 'right'); ?></title>
				
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<!-- icons & favicons -->
		<!-- For iPhone 4 -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/h/apple-touch-icon.png">
		<!-- For iPad 1-->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/m/apple-touch-icon.png">
		<!-- For iPhone 3G, iPod Touch and Android -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon-precomposed.png">
		<!-- For Nokia -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/library/images/icons/l/apple-touch-icon.png">
		<!-- For everything else -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>

		<div class="row container">
			
			<?php 
				wp_nav_menu( 
			    	array( 
			    		'menu' 				=> 'mobile_nav', /* menu name */
			    		'menu_class' 		=> 'side-nav tabs vertical',
			    		'theme_location' 	=> 'mobile_nav', /* where in the theme it's assigned */
			    		'container_class' 	=> 'show-for-small show-for-medium-portrait mobile-nav-container', /* container tag */
			    		'depth' 			=> '2',
			    		'fallback_cb'		=> false
			    	)
			    );
			?>
			
			<!-- Content Div !-->
			<div id="content">
				
				<div class="large-12 columns">
					<header role="banner" id="top-header">
						
						<div class="siteinfo">
							<div class="show-for-small show-for-medium-portrait menu-action">
						  	    <a href="#sidebar" id="sidebarButton" class="sidebar-button small secondary button">
									<svg xml:space="preserve" enable-background="new 0 0 48 48" viewBox="0 0 48 48" height="18px" width="18px" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1">
										<line y2="8.907" x2="48" y1="8.907" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
										<line y2="24.173" x2="48" y1="24.173" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
										<line y2="39.439" x2="48" y1="39.439" x1="0" stroke-miterlimit="10" stroke-width="8" stroke="#000000" fill="none"/>
										Menu
									</svg>
								</a>
							</div>
							<h1><a class="brand" id="logo" href="<?php echo get_bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
							<h4 class="subhead"><?php echo get_bloginfo ( 'description' ); ?></h4>
						</div>

						<nav class="top-bar nav-bar hide-for-small hide-for-medium-portrait">
						  <ul class="title-area">
						    <!-- Title Area -->
						    <li class="name">
						      <h1><a href="#">Top Bar Title </a></h1>
						    </li>
						    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
						    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						  </ul>
						
						  <section class="top-bar-section">
						    <!-- Left Nav Section -->
						    <?php 
								// Adjust using Menus in Wordpress Admin 
								if( class_exists('main_nav_walker') ) {
									wp_nav_menu( 
								    	array( 
								    		'menu' 				=> 'main_nav', /* menu name */
								    		'menu_class' 		=> 'left',
								    		'theme_location' 	=> 'main_nav', /* where in the theme it's assigned */
								    		'container' 		=> 'false', /* container tag */
								    		'depth' 			=> '4',
								    		'walker' 			=> new main_nav_walker(),
								    		'fallback_cb'		=> false
								    	)
								    );
								}
							?>
							
							<!-- Rigth Nav Section !-->
							<ul class="right">
								<li class="has-form" >
									<form action="<?php echo home_url( '/' ); ?>" method="get">
								      <div class="large-12 columns">
								        <input type="text" id="search" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
								      </div>
							  		</form>
								</li>
							</ul>
							
						  </section>
						</nav>
						
					</header> <!-- end header -->
				</div>
				
				<!-- Mobile nav for deep (Teriary) pages if page has any !-->
				<div id="mobile-deep-nav-container" class="large-12 columns show-for-small">
					<?php do_action( 'prso_deep_mobile_nav' ); ?>
				</div>