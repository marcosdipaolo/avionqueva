<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- tratata -->
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wptime-plugin-preloader"></div>


	<?php if (is_single()) { ?>
	<!-- SCRIPT DE FACEBOOK COMMENTS -->
	<div id="fb-root"></div>
	<script>
		(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src =
				'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&autoLogAppEvents=1&version=v2.12&appId=1957998210896837';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- fin SCRIPT DE FACEBOOK COMMENTS -->
	<?php } ?>



	<header>
		<!-- BANNERS -->
		<div class="bannersWrapper">
			<?php 
			
		if (get_theme_mod('di_home_header') == NULL || get_theme_mod('di_home_header') == '') {
			$homeHeader = get_template_directory_uri() . '/img/portada-h2.jpg';
			} else {
			$homeHeader = get_theme_mod('di_home_header');
			};		 		 
		if (is_home()) { 
			echo('<div class="main-banner" style="background-image: url(\'' . $homeHeader . '\');"><p id="istvansch"> &copy; Istvansch</p><img class="logo" src="' . get_template_directory_uri() . '/img/logos/con-lij-500px-W-SH.png" alt=""></div>');
		 } 
		 $categorias = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
				));

		$headers = [];
		for ($i=1; $i <= count($categorias) ; $i++) { 
			$e=$i-1;
			if (get_theme_mod('di_header' . $i) == NULL || get_theme_mod('di_header' . $i) == '') {
			array_push($headers, get_template_directory_uri() . '/img/portada-'. $e .'.jpg');
			} else {
				array_push($headers, get_theme_mod('di_header' . $i));
			};
		}	
		// var_dump($headers);	
		for ($i2=0; $i2 < count($categorias) ; $i2++) {
		$h3 = '<h3 class="titulo">' . $categorias[$i2]->name . '</h3>';
			if ( is_category($categorias[$i2]->term_id) ) {
			echo('<div class="main-banner header-'. $i2 .'" style="background-image: url(\'' . $headers[$i2] . '\');">' . $h3 . '<p id="istvansch"> &copy; Istvansch</p></div>');
			}
		};
		if ( is_page('eventos') ) { ?>
			<div class="main-banner" style="background-image: url('<?php echo get_template_directory_uri() . '/img/portada-e.jpg' ?>')">
				<h3 class="titulo">
					<?php the_title(); ?>
				</h3>
				<p id="istvansch"> &copy; Istvansch</p>
			</div>
			<?php }
		if ( is_page('nosotros') ) { ?>
			<div class="main-banner nosotros" style="background-image: url('<?php echo get_template_directory_uri() . '/img/nosotros.jpg' ?>'); height: 400px">
				<!--<h3 class="titulo"><?php //the_title(); ?></h3>-->
			</div>
			<?php }
		?>
		</div>

		<!-- fin BANNERS -->



		<!-- NAVBAR MAIN -->

		<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
			<nav class="uk-navbar-container nav-header uk-visible@m" uk-navbar>
				<div class="nav-overlay uk-navbar-left">
					<a class="uk-navbar-item uk-logo" href="<?php echo(home_url()); ?>">
						<img id="logo" src="<?php echo get_bloginfo('template_url') ?>/img/3.png" />
					</a>

					<?php
						$args = array(
							"theme_location" => "primario"
						);
						wp_nav_menu( $args );
						?>

				</div>
				<div class="nav-overlay uk-navbar-right">
					<a href="#" class="uk-icon-button uk-margin-small-right" uk-icon="search" uk-toggle="target: .nav-overlay; animation: uk-animation-fade"></a>
				</div>
				<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
					<div class="uk-navbar-item uk-width-expand">
						<?php 
						get_search_form();
					?>
					</div>
					<a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
				</div>
			</nav>
		</div>

		<!-- fin NAVBAR MAIN -->



		<!-- NAVBAR MOBILE -->
		<nav class="uk-navbar uk-navbar-container nav-header uk-hidden@m">
			<a href="<?php echo site_url(); ?>">
				<img id="logo" src="<?php echo get_bloginfo('template_url') ?>/img/3.png" />
			</a>
			<div id="icono">
				<a href="#offcanvas-usage" uk-toggle>
					<button class="hamburger hamburger--spin js-hamburger" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</a>
			</div>
			<div class="uk-offcanvas-content">
				<!-- The whole page content goes here -->
				<div id="offcanvas-usage" uk-offcanvas>
					<div class="uk-offcanvas-bar uk-hidden@m">
						<!-- <button class="uk-offcanvas-close" type="button" uk-close></button> -->
						<?php
								$args = array(
									"theme_location" => "primario"
								);
								wp_nav_menu( $args );
							?>
					</div>
				</div>
			</div>
		</nav>
		<!-- fin NAVBAR MOBILE -->
	</header>