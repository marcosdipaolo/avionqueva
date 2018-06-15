<?php get_header();?>
<div class="todo">
	<div class="uk-container  ">
		<!-- 	ESTO ES EL ARCHIVE.PHP  -->
		<div class="clearfix">
			<?php
				$queried = $wp_query->get_queried_object();
				if ($queried->category_parent) {
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
				}
			?>
			<h3 class="archive">
			<?php
			if ( is_tag() ) {
			 	echo 'Archivo de la etiqueta: '; single_tag_title();
				} 
			elseif ( is_author() ) {
				the_post();
				echo 'Artículos de: ' . get_the_author();
				rewind_posts();
				} 
			elseif ( is_day() ) {
				echo 'Archivo Diario: ' .get_the_date();
				}
			elseif ( is_month() ) {
				echo 'Archivo Mensual de ' . ucfirst(get_the_date('F \d\e Y'));
				}
			elseif ( is_year() ) {
				echo 'Archivo del año: ' .get_the_date('Y');
				}
				?>
			</h3>
			<section class="main-column clearfix">
				<?php 
			if (have_posts()) :
			 
			while (have_posts()) : the_post(); 

			get_template_part('blog');

			endwhile;?>
				
				<?php else :
		echo '<p class="no-content">No encontramos ningún contenido</p>';
				endif;?>
			

		</section>
		<!-- cierre main column -->
		<aside class="sidebar_container">
			<?php get_sidebar();?>
		</aside>
	</div>
	<div class="paginate">
					<?php echo paginate_links();?>
				</div>
	<!-- cierre clearfix -->


	<?php get_footer(); ?>