<?php
// Register Featured Post Type////////////////////////////////////////

function featured_post_type() {

	$labels = array(
		'name'                  => _x( 'Featured Posts', 'Post Type General Name', 'di-news-blog' ),
		'singular_name'         => _x( 'Featured Post', 'Post Type Singular Name', 'di-news-blog' ),
		'menu_name'             => __( 'Featured Posts', 'di-news-blog' ),
		'name_admin_bar'        => __( 'Featured Posts', 'di-news-blog' ),
		'archives'              => __( 'Item Archives', 'di-news-blog' ),
		'attributes'            => __( 'Item Attributes', 'di-news-blog' ),
		'parent_item_colon'     => __( 'Parent Item:', 'di-news-blog' ),
		'all_items'             => __( 'All Items', 'di-news-blog' ),
		'add_new_item'          => __( 'Add New Item', 'di-news-blog' ),
		'add_new'               => __( 'Add New', 'di-news-blog' ),
		'new_item'              => __( 'New Item', 'di-news-blog' ),
		'edit_item'             => __( 'Edit Item', 'di-news-blog' ),
		'update_item'           => __( 'Update Item', 'di-news-blog' ),
		'view_item'             => __( 'View Item', 'di-news-blog' ),
		'view_items'            => __( 'View Items', 'di-news-blog' ),
		'search_items'          => __( 'Search Item', 'di-news-blog' ),
		'not_found'             => __( 'Not found', 'di-news-blog' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'di-news-blog' ),
		'featured_image'        => __( 'Featured Image', 'di-news-blog' ),
		'set_featured_image'    => __( 'Set featured image', 'di-news-blog' ),
		'remove_featured_image' => __( 'Remove featured image', 'di-news-blog' ),
		'use_featured_image'    => __( 'Use as featured image', 'di-news-blog' ),
		'insert_into_item'      => __( 'Insert into item', 'di-news-blog' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'di-news-blog' ),
		'items_list'            => __( 'Items list', 'di-news-blog' ),
		'items_list_navigation' => __( 'Items list navigation', 'di-news-blog' ),
		'filter_items_list'     => __( 'Filter items list', 'di-news-blog' ),
	);
	$args = array(
		'label'                 => __( 'Featured Post', 'di-news-blog' ),
		'description'           => __( 'Featured posts', 'di-news-blog' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'featured_posts', $args );

}
add_action( 'init', 'featured_post_type', 0 );

// Register Footer Post Type///////////////////////////////////////

function footer_post_type() {

	$labels = array(
		'name'                  => _x( 'Footer Posts', 'Post Type General Name', 'di-news-blog' ),
		'singular_name'         => _x( 'Footer Post', 'Post Type Singular Name', 'di-news-blog' ),
		'menu_name'             => __( 'Footer Posts', 'di-news-blog' ),
		'name_admin_bar'        => __( 'Footer Posts', 'di-news-blog' ),
		'archives'              => __( 'Item Archives', 'di-news-blog' ),
		'attributes'            => __( 'Item Attributes', 'di-news-blog' ),
		'parent_item_colon'     => __( 'Parent Item:', 'di-news-blog' ),
		'all_items'             => __( 'All Items', 'di-news-blog' ),
		'add_new_item'          => __( 'Add New Item', 'di-news-blog' ),
		'add_new'               => __( 'Add New', 'di-news-blog' ),
		'new_item'              => __( 'New Item', 'di-news-blog' ),
		'edit_item'             => __( 'Edit Item', 'di-news-blog' ),
		'update_item'           => __( 'Update Item', 'di-news-blog' ),
		'view_item'             => __( 'View Item', 'di-news-blog' ),
		'view_items'            => __( 'View Items', 'di-news-blog' ),
		'search_items'          => __( 'Search Item', 'di-news-blog' ),
		'not_found'             => __( 'Not found', 'di-news-blog' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'di-news-blog' ),
		'featured_image'        => __( 'Featured Image', 'di-news-blog' ),
		'set_featured_image'    => __( 'Set featured image', 'di-news-blog' ),
		'remove_featured_image' => __( 'Remove featured image', 'di-news-blog' ),
		'use_featured_image'    => __( 'Use as featured image', 'di-news-blog' ),
		'insert_into_item'      => __( 'Insert into item', 'di-news-blog' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'di-news-blog' ),
		'items_list'            => __( 'Items list', 'di-news-blog' ),
		'items_list_navigation' => __( 'Items list navigation', 'di-news-blog' ),
		'filter_items_list'     => __( 'Filter items list', 'di-news-blog' ),
	);
	$args = array(
		'label'                 => __( 'Footer Post', 'di-news-blog' ),
		'description'           => __( 'Footer Posts', 'di-news-blog' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'footer_posts', $args );

}
add_action( 'init', 'footer_post_type', 0 );
