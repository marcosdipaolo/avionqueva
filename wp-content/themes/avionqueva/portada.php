<section class="post-portada uk-text-center">
	<?php get_template_part('ribbon'); ?>

	<div class="uk-card uk-card-default uk-card-hover">
		<?php
            if (has_post_thumbnail()) { ?>
			<a href="<?php the_permalink(); ?>">
				<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" uk-grid>
					<div class="uk-card-media-left" style="background-image: url('<?php the_post_thumbnail_url(" medium_large_HC
					   ");?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
					</div>
			</a>
			<div>
			
				<div class="uk-card-body">
					<a href="<?php the_permalink(); ?>">
						<h2 class="uk-card-title">
							<?php the_title(); ?>
						</h2>
					</a>
					<p>
						<?php echo excerpt(40); ?>
					</p>
					<p id="mini-meta">
						<?php
               if( get_the_author() != 'Avion que va') {?>
                    Por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();} ?></a>
            <?php //the_time('d/m/Y');
            if (get_field('creditos_arriba')) {
                  echo (' - ');
                 the_field('creditos_arriba'); 
            }
         // get_template_part('post-format');
         // get_template_part('categoria');
            ?>
					</p>
				</div>
			</div>
			</div>

			<?php }
		else { ?>
			<a href="<?php the_permalink(); ?>">
				<div class="uk-card-media-left" style="background-image: url('<?php echo get_bloginfo(" template_url
				   ") ?>/img/comodin.jpg');background-repeat: no-repeat; background-size: cover; background-position: center;">
				</div>
			</a>
			<?php }

		?>

	</div>
</section>
<section class="main-column clearfix">	