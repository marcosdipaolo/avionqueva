<?php get_header(); 
	if (have_posts()) {
		while (have_posts()) : the_post();
			if (get_post_format() == false) {
					get_template_part('blog', 'single');
			} 
			else {
				get_template_part('blog', get_post_format());
			}
		endwhile; 
	}
	else  {
		echo '<p class="no-content">No encontramos ningún contenido</p>';
	}

	// ARTICULOS RELACIONADOS

	$artID = get_the_ID();
	$categID = get_the_category()[0]->term_id;
	$postsRelacionados = new WP_Query(array(
		'cat' => $categID,
		'posts_per_page' => 8,
		'post__not_in' => array($artID),
		// 'orderby' => 'rand'
	));
	if ($postsRelacionados->have_posts()) : ?>
<div class="relacionados clearfix">
	<h4 align="center">Mas notas de la sección</h4>
	<div uk-slider>

		<div class="uk-position-relative">

			<div class="uk-slider-container uk-light">
				<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-1@s uk-child-width-1-2@m">
					<?php
		while ($postsRelacionados->have_posts()) : $postsRelacionados->the_post();
		get_template_part('blog');

		endwhile;
		// else :
		// 		echo '<h6 class="no-content" align="center">No hay artículos relacionados</h6>';
		endif;
		
		wp_reset_postdata();
		?>
				</ul>
			</div>
			<div class="uk-hidden@s uk-light">
				<a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>

			<div class="uk-visible@s">
				<a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
				<a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
			</div>

		</div>

		<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

	</div>

</div>
<?php get_footer(); ?>