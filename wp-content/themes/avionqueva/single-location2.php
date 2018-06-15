<?php
/* 
 * Remember that this file is only used if you have chosen to override location pages with formats in your events manager settings!
 * You can also override the single location page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-location.php
 */
/*
 * This page displays a single event, called during the em_content() if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output() 
 */?>
 <!-- Página single de ubicaciones  -->
 <?php get_header(); 
	if (have_posts()) {
		while (have_posts()) : the_post();
					get_template_part('blog', 'ubicaciones');
		endwhile; }		
	else  {
		echo '<p class="no-content">No encontramos ningún contenido</p>';
	}
get_footer(); 

?>
