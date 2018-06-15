<?php get_header(); 
	if (have_posts()) {
		while (have_posts()) : the_post();
					get_template_part('blog', 'eventos');
		endwhile; }		
	else  {
					echo "<p>No encontramos ningún contenido</p>";
	}
get_footer(); 

?>