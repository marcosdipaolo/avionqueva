<?php
function avionqueva_resources() {
	wp_enqueue_style("uk_style", get_template_directory_uri() . '/css/uikit.min.css');
	wp_enqueue_style("hamburguer_style", get_template_directory_uri() . '/css/hamburgers.min.css');
	wp_enqueue_style("style", get_stylesheet_uri());
	wp_enqueue_script( 'uk_js', get_template_directory_uri() . '/js/min/uikit.min.js');
	wp_enqueue_script( 'uk-icons_js', get_template_directory_uri() . '/js/min/uikit-icons.min.js');
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/min/main-min.js', array('jquery'));
	wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/js/easing.js', array('jquery'));
	wp_enqueue_script( 'scrollReveal_js', get_template_directory_uri() . '/js/min/scrollReveal-min.js', array('jquery'));
	wp_enqueue_script( 'animaciones_js', get_template_directory_uri() . '/js/min/animaciones-min.js', array('jquery'));
	wp_enqueue_script( 'smoothScroll_js', get_template_directory_uri() . '/js/min/smoothScroll-min.js', array('jquery'));
	
	
// ESTO ERA EL NONCE DEL AYAX

	// wp_localize_script('main_js', 'magicalData', array(
	// 	'nonce' => wp_create_nonce('wp_rest'),
	// 	'siteURL' => get_site_url()
	// ));
}
add_action("wp_enqueue_scripts","avionqueva_resources");





// Get Top Ancestor

// function get_top_ancestor_id() {

// 	global $post;

// 	if ($post->post_parent !==0) {
// 		return $post->post_parent;
// 	}
// 	else {
// 		return $post->ID; 
// 	}}

// Function has children

// function has_children() {
// 	global $post;
// 	$pages = get_pages("child_of=" . $post->ID);
// 	return count($pages);

// }

// Personalizar el largo del resumen (excerpt) de los posts. 

// function custom_excerpt_length() {
// 	return 15; 
// }
// add_filter('excerpt_length' , 'custom_excerpt_length');



// Theme setup

	

	function theme_setup() {

		// Menus
		register_nav_menus(array(
		"primario" => __("Menu Primario"),
		"footer" => __("Menu Footer"),
 		)); 
	
		// Featured image support

		add_theme_support('post-thumbnails');
		add_image_size('medium-thumbnail', 533, 300, true);
		add_image_size('medium-large', 768, 567, true);
		add_image_size('full-hd', 1920, 1080, true);

		// Add support Post Formats

		add_theme_support('post-formats' , array('audio'));
	}

	

		add_action('after_setup_theme' , 'theme_setup');

	// Add widget support and widget locations

	function ourWidgetsInit() {
		register_sidebar( array(
				'name' => 'Barra Lateral Area 1',
				'id' => 'sidebar1',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<a href="'. site_url() .'/eventos"><h4 class"title-widget">',
				'after_title' => '</h4></a>'
			));
		register_sidebar( array(
				'name' => 'Barra Lateral Area 2',
				'id' => 'sidebar2',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="title-widget">',
				'after_title' => '</h4>'
			));
		register_sidebar( array(
				'name' => 'Barra Lateral Area 3',
				'id' => 'sidebar3',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="title-widget">',
				'after_title' => '</h4>'
			));
		register_sidebar( array(
				'name' => 'Barra Lateral Area 4',
				'id' => 'sidebar4',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="title-widget">',
				'after_title' => '</h4>'
			));
		register_sidebar( array(
				'name' => 'Barra Lateral Area 5',
				'id' => 'sidebar5',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="title-widget">',
				'after_title' => '</h4>'
			));
		register_sidebar( array(
				'name' => 'Barra Lateral Area 6',
				'id' => 'sidebar6',
				'before_widget' => '<div>',
				'after_widget' => '</div>',
				'before_title' => '<h4 class="title-widget">',
				'after_title' => '</h4>'
			));


			// WIDGETS FOOTER

		register_sidebar( array(
				'name' => 'Pie de página Area 1',
				'id' => 'footer1',
				'before_widget' => '<div class="widget-footer">',
				'after_widget' => '</div>',
				'before_title' => '<h5 class="title-widget">',
				'after_title' => '</h5>'
			));
		register_sidebar( array(
				'name' => 'Pie de página Area 2',
				'id' => 'footer2',
				'before_widget' => '<div class="widget-footer">',
				'after_widget' => '</div>',
				'before_title' => '<h5 class="title-widget">',
				'after_title' => '</h5>'
			));
		register_sidebar( array(
				'name' => 'Pie de página Area 3',
				'id' => 'footer3',
				'before_widget' => '<div class="widget-footer">',
				'after_widget' => '</div>',
				'before_title' => '<h5 class="title-widget">',
				'after_title' => '</h5>'
			));
		register_sidebar( array(
				'name' => 'Pie de página Area 4',
				'id' => 'footer4',
				'before_widget' => '<div class="widget-footer">',
				'after_widget' => '</div>',	
				'before_title' => '<h5 class="title-widget">',
				'after_title' => '</h5>'
			));
	}
	add_action('widgets_init' , 'ourWidgetsInit');

// Para llamar el contenido (o excerpt) de una página o post específica/o

// function excerpt_by_ID( $post_id=0, $more_link_text = null, $stripteaser = false ){
//     global $post;
//     $post = &get_post($post_id);
//     setup_postdata( $post, $more_link_text, $stripteaser );
//     the_excerpt();
//     wp_reset_postdata();
// }

// function content_by_ID( $post_id=0, $more_link_text = null, $stripteaser = false ){
//     global $post;
//     $post = &get_post($post_id);
//     setup_postdata( $post, $more_link_text, $stripteaser );
//     the_content();
//     wp_reset_postdata();
// }

// Para linkear Featured images al post

// function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {

// If (! is_singular()) { 
	
// $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
// return $html;

// } else { 

// return $html;

// }

// }
// add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );



// Add support HTML5 

//add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

// Excluimos CATEGORÍAS del blog: SLIDER, TANGO Y COSQUIN

// function exclude_category( $query ) {
// 	if ( $query->is_home() && $query->is_main_query() ) {
// 	$query->set( 'cat', '-7, -312, -313' );
// 	}
// }
// add_action( 'pre_get_posts', 'exclude_category' );


// Limiting the excerpt, content and title's length

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
	  array_pop($excerpt);
	  $excerpt = implode(" ",$excerpt).'...';
	} else {
	  $excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
  }
   
// function content($limit) {
//   $content = explode(' ', get_the_content(), $limit);
//   if (count($content)>=$limit) {
//     array_pop($content);
//     $content = implode(" ",$content).'...';
//   } else {
//     $content = implode(" ",$content);
//   }	
//   $content = preg_replace('/[.+]/','', $content);
//   $content = apply_filters('the_content', $content); 
//   $content = str_replace(']]>', ']]&gt;', $content);
//   return $content;
// }


// function max_title_length( $title ) {
// 	$max = 55;
// 	if( strlen( $title ) > $max ) {
// 	return substr( $title, 0, $max ). " &hellip;";
// 	} else {
// 	return $title;
// 	}
// }
// add_filter( 'the_title', 'max_title_length');

// EM formats


function my_em_custom_formats( $array ){
	$my_formats = array(
		'dbem_categories_list_item_format_header', 
		'dbem_categories_list_item_format',
		'dbem_categories_list_item_format_footer',
		'dbem_event_list_item_format',
		'dbem_event_list_item_format_header',
		'dbem_event_list_item_format_footer',
		'dbem_category_page_format',
		'dbem_category_page_title_format',
		'dbem_single_event_format'
		); //the format you want to override, corresponding to file above.
	return $array + $my_formats; //return the default array and your formats.
}
add_filter('em_formats_filter', 'my_em_custom_formats', 1, 1);
////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////
/////////						WP_CUSTOMIZE				  //////////
///////////////////////////////////////////////////////////////

include( dirname(__FILE__) . '/includes/customizing.php');



/////////////////////////////////////////////////////////////////
/////////////////////// CUSTOM WIDGET ///////////////////////////
/////////////////////////////////////////////////////////////////



// Register and load the widget
function di_load_widget() {
    register_widget( 'di_latest_post_widget' );
}
add_action( 'widgets_init', 'di_load_widget' );



/////////// WP_Widget class /////////////////////////////
 

include ( dirname (__FILE__) . '/includes/latest-widget-class.php');


// update_option( 'siteurl', 'https://avionqueva.dev' );
// update_option( 'home', 'https://avionqueva.dev/' );

?>