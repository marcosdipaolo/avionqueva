<?php
function di_Headers_Customize($wp_customize) {

//////////////////////////////////////////////////////////////
//////////////		THE HEADER IMAGES PANEL		 /////////////
//////////////////////////////////////////////////////////////

	$wp_customize->add_panel( 'di_header_images', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('DI - Imágenes del Banner', 'di-news-blog'),
		'description'    => ''
	));

//////////////////////////////////////////////////////////////
//////////////		THE HEADER SECTIONS  		//////////////
//////////////////////////////////////////////////////////////

	$wp_customize->add_section('di_home_header_image', array(
		'title' => __('Imagen del Banner del Inicio', 'di-news-blog'),
		'priority' => 60, 
		'panel' => 'di_header_images'
	));
	$wp_customize->add_section('di-header_images', array(
		'title' => __('Imagen de los Banner de las Secciones', 'di-news-blog'),
		'priority' => 60, 
		'panel' => 'di_header_images'
	));

//////////////////////////////////////////////////////////////
////// 		THE CATEGORY HEADERS CONTROLS AND SETTINGS 	/////
//////////////////////////////////////////////////////////////
	$catCount = get_terms(array(
				'taxonomy' => 'category',
				'hide_empty' => false,
		));
	for ($i=1; $i <= count($catCount) ; $i++) { 
		$wp_customize->add_setting('di_header' . $i, array(
		'type' => 'theme_mod',
		'transport' => 'refresh'
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,	'di_cat_header' . $i .  'Control', array(
		'label' => __('Imangen del Banner de la Sección: ' . $catCount[$i-1]->name, 'di-news-blog'),
		'section' => 'di-header_images',
		'settings' => 'di_header' . $i
				)
			)
		);
	}
//////////////////////////////////////////////////////////////
////// 		THE HOMEPAGE HEADER CONTROL AND SETTING    ///////
//////////////////////////////////////////////////////////////
		$wp_customize->add_setting('di_home_header', array(
				'type' => 'theme_mod',
				'transport' => 'refresh'
				)
			);
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,	'di_home_headerControl', array(
		'label' => __('Imagen del banner de la página de inicio', 'di-news-blog'),
		'section' => 'di_home_header_image',
		'settings' => 'di_home_header'
				)
			)
		);
}
add_action('customize_register', 'di_Headers_Customize');

//////////////////////////////////////////////////////////////
//////////////////// 	COLORS			 	 ////////////////
//////////////////////////////////////////////////////////////


function di_Custom_Colors_Customize($wp_customize) {

//////////////////// 	THE MAIN COLOR 		 ////////////////

	$wp_customize->add_section('di-colors', array(
		'title' => __('DI - Colores'),
	));
	$wp_customize->add_setting('di_main_color', array(
				'type' => 'theme_mod',
				'transport' => 'refresh'
				)
			);
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'MainColorControl', array(
		'label' => __('Color Principal'),
		'section' => 'di-colors',
		'settings' => 'di_main_color'
	)));
	
//////////////// 	THE BACKGROUND COLOR 		 ////////////////

	$wp_customize->add_setting('di_bg_color', array(
				'type' => 'theme_mod',
				'transport' => 'refresh'
				)
			);
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'BgColorControl', array(
		'label' => __('Color de fondo'),
		'section' => 'di-colors',
		'settings' => 'di_bg_color'
	)));

	//////////////// 	THE HOVER COLOR 		 ////////////////

	$wp_customize->add_setting('di_hover_color', array(
			'type' => 'theme_mod',
			'transport' => 'refresh'
			)
		);
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'HoverControl', array(
		'label' => __('Color de elemento señalado'),
		'section' => 'di-colors',
		'settings' => 'di_hover_color',
		'default' => '#77dfff'
	)));
}
add_action('customize_register', 'di_Custom_Colors_Customize');


//////////////////////////////////////////////////////////////
//////////////////// 	CUSTOM LOGO		 	 ////////////////
//////////////////////////////////////////////////////////////
// function customLogo($wp_customize) {
// $wp_customize->add_setting('di_custom_logo', array(
// 	'type' => 'theme_mod',
// 	'transport' => 'refresh'
// ));
// $wp_customize->add_section('di_custom_logo_section', array(
// 	'title' => __('DI - Custom Logo', 'di-news-blog')
// ));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diCustomLogo', array(
// 		'label' => __('DI - Custom Logo', 'di-news-blog'),
// 		'section' => 'di_custom_logo_section',
// 		'settings' => 'di_custom_logo'
// 				)
// 			)
// 		);
// }

// add_action('customize_register', 'customLogo');

/////////////////////////////////////////////////////////////////
//////////////////// 	DEFAULT IMAGE		 	 ////////////////
/////////////////////////////////////////////////////////////////

function defaultImage($wp_customize) {
$wp_customize->add_setting('di_default_image', array(
	'type' => 'theme_mod',
	'transport' => 'refresh'
));
$wp_customize->add_section('di_default_image_section', array(
	'title' => __('DI - Imágen Destacada Predeterminada', 'di-news-blog')
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'diDefaulImage', array(
		'label' => __('Imágen Destacada Predeterminada', 'di-news-blog'),
		'section' => 'di_default_image_section',
		'settings' => 'di_default_image'
				)
			)
		);
}

add_action('customize_register', 'defaultImage');

//////////////////////////////////////////////////////////////
//////////////////// 	APPLYING CSS	//////////////////////
//////////////////////////////////////////////////////////////

function diApplyingCss() { ?>
	<style type="text/css">
	body > div.todo > div > div.clearfix > section.main-column.clearfix > article > div.uk-card.uk-card-default.uk-card-hover > div > h4 > a,
	#em-wrapper > div.css-events-list.uk-margin > div > div > div.aq-body > div > div > h3 > a, 
	body > div.uk-container.single > article > p > a,
	body > div.todo > div > section > div.no-todo.jornadas.uk-active > div > div > div > div.aq-body > div > div > h3 > a,
	section.post-portada div.uk-card-body h2.uk-card-title, 
	.relacionados article h4.uk-card-title>a, 
	.relacionados p.mini-meta a, 
	div.paginate a, 
	.em-pagination a, 
	div.bannersWrapper > div.main-banner > h3.titulo, 
	aside.sidebar_container div.sidebar-widget-area.widgAvion a h4, 
	div.todo-nosotros div.nosotros.uk-container div.contenedor-nosotros h3.titulo,
	form.mailpoet_form > p.mailpoet_paragraph > input.mailpoet_submit,
	body > div.uk-container.single > article > div.social.clearfix > a, body > div.uk-container.single > article > span,
	body > div.uk-container.single > article > p.fechayhora,article.single-post blockquote p, p#mini-meta a, p.mini-meta a, article.single-post > div.social.clearfix > a, #etiquetas > ul > li > a, article.single-post blockquote p em, article.single-post blockquote p strong, article.single-post > div.post-content > blockquote > div
	 {
		color: <?php echo get_theme_mod('di_main_color') ?>!important;
	}
	nav.uk-navbar.uk-navbar-container.nav-header, div.footer, div.footer-feet, 
	div[uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"]>nav.nav-header div.menu-primary-menu-container ul#menu-primary-menu-1 div.uk-navbar-dropdown, 
	nav.uk-navbar.uk-navbar-container.nav-header div.menu-menu-primario-container ul#menu-menu-primario>li>div.uk-navbar-dropdown,
	div.sidebar-widget-area.uk-card.uk-card-default.uk-card-body.widgAgenda > a > button {
		background-color: <?php echo get_theme_mod('di_main_color') ?>!important;
	}
	div.todo-nosotros div.nosotros.uk-container div.contenedor-nosotros div.social a, 
	article.single-post div.social a {
		border: 2px solid <?php echo get_theme_mod('di_main_color') ?>!important;
	}
	div.todo,
	form.mailpoet_form > p.mailpoet_paragraph > input.mailpoet_submit {
		background-color: <?php echo get_theme_mod('di_bg_color') ?>!important;
	}
	a:hover, a h2:hover, a:active,
	form.mailpoet_form > p.mailpoet_paragraph > input.mailpoet_submit:hover,
	body > div.uk-container.single > article > div.social.clearfix > a:hover   {
		color:<?php echo get_theme_mod('di_hover_color') ?>!important;
		
	}
	.widget-footer > div > div.social > a:hover,
	body > div.uk-container.single > article > div.social.clearfix > a:hover {
		border-color:<?php echo get_theme_mod('di_hover_color') ?>!important;
	}
	article.single-post blockquote {
		border-color:<?php echo get_theme_mod('di_main_color') ?>!important;
	}

	</style>


<?php }
add_action('wp_head', 'diApplyingCss');