<?php 
if (has_post_video()){ ?>
<div class="image-full-post">
	<?php the_post_video(960, 540); ?>
</div>
<?php 
} else {
?>
<?php
if (has_post_thumbnail()) { ?>
	<div class="image-full-post" style="background-image: url('<?php the_post_thumbnail_url('full-hd');?>');">
		<div id="ribbonSingle">
			<?php get_template_part('ribbon'); ?>
		</div>
	</div>
	<?php }
else {
?>
	<div style="height: 70px;"></div>
	<?php }
}

?>
	<!-- 		BLOG-SINGLE.PHP	  -->
	<div class="clearfix">
		<div class="uk-container single">
			<article class="single-post clearfix">
				<h3 id="titulo-single">
					<span>
						<?php the_title(); ?>
					</span>
				</h3>
				<p class="mini-meta">
					Por
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
						<?php the_author(); ?> |
					</a>

					<?php the_time('j \d\e F \d\e Y' );?> |
					<?php
				the_field('creditos_arriba');
				// get_template_part('post-format');
				// get_template_part('categoria');
			?>
				</p>


				<?php
				
				get_template_part('socialsingle');
			?>


				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<?php 
				if (get_field('creditos_abajo')) { ?>
				<div class="creditos-abajo">
					<p style="padding: 0; margin:0">
						<?php the_field('creditos_abajo') ?>
					</p>
				</div>

				<?php
				}
			?>



				<div class="share-single clearfix">
				</div>
				<!-- <div class="fb-share-button" data-href="<?php //the_permalink(); ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div> -->

				<?php 
		$tags = get_the_tag_list($before = '<li>', $sep='</li><li>', $after = '</li>');
		if( isset( $tags)) {
			echo '<div id="etiquetas" class="clearfix">';
			echo '<h4 class="titulo-etiquetas">Etiquetas: </h4>';
			echo '<ul class="uk-list">';
			echo $tags;
			echo '</ul>';
			echo '</div>';
		}
		?>
			</article>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>