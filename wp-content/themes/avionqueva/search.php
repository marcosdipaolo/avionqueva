<?php

get_header();?>
<div class="todo">
	<div class="uk-container ">
		<div class="search-results clearfix">
			<h3 class="titulo">Resultados de la busqueda de:
				<?php the_search_query(); ?>
			</h3>
			<section class="main-column clearfix">
				<!-- <div class="paginate">
			<?php //echo paginate_links();?>
		</div> -->
				<?php 
	if (have_posts()) : ?>

				<?php
		while (have_posts()) : the_post(); 
		get_template_part('blog' , get_post_format());
		endwhile;?>
					<div class="paginate">
						<?php echo paginate_links();?>
					</div>
					<?php
	else :
			echo "<p>No encontramos ningún contenido</p>";
	endif;?>
			</section>
			<aside class="sidebar_container">
				<?php get_sidebar();?>
			</aside>
		</div>
		<?php 
get_footer(); 
?>