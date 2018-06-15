<?php 
					
					$postsAvion = new WP_Query(array(
						'cat' => 9,
						'posts_per_page' => 3,
						'order' => 'DESC',
						
					)); ?>
		<a href="<?php echo esc_url(get_category_link(get_cat_ID('Mi avión que va'))); ?>">
			<img class="titulo-avion" src="<?php echo get_bloginfo('template_url') . '/img/miAvion.png' ?>" alt="">

		</a>
		<?php
			$first = true;
			if ($postsAvion->have_posts()) : 
				while ($postsAvion->have_posts()) : $postsAvion->the_post();
				if ($first) { ?>
						<article class="avion-post">
						<?php 
							if (has_post_video()) {
									echo the_post_video(300,169);
								}
								else { ?>
								<a href="<?php the_permalink(); ?>">
								<div class="thumb-cont" style="background-image: url('<?php
								if (has_post_thumbnail()) {
									echo the_post_thumbnail_url("medium-thumbnail");
								}
								else {
									echo get_template_directory_uri() . '/img/comodin.jpg';
									
								};?>'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 300px;"></div>
								
							</a>
								<?php } ?>
							<a href="<?php the_permalink(); ?>">
								<h4 class="titulo-post-sidebar">
									<?php the_title(); ?>
								</h4>
							</a>
							

						</article>
						<?php 
						$first = false;
						}
						else {
			?>
         <hr style="margin: 10px auto; border-color: #f1f1f1">
			<article class="avion-post clearfix">
				
			<a href="<?php the_permalink(); ?>">
				<?php if(has_post_video()) { ?>
				<div class="thumbAvion" style="background-image: url('<?php echo get_the_post_video_image_url() ?>')">
						<span id="play" uk-icon="icon: triangle-right; ratio: 5"></span>
				</div>
				<?php } 
				else { ?>
					<div class="thumbAvion" style="background-image: url('<?php echo get_bloginfo('template_url') . '/img/comodin.jpg' ?>')"></div>
				<?php }
				?>
			</a>
				<div class="contentAvion">
					<a href="<?php the_permalink(); ?>">
						<h4 class="titulo-post-sidebar">
							<?php the_title(); ?>
						</h4>
					</a>
				</div>
			</article>
         
				<?php }
			endwhile;
			?>
			<!-- <div class="paginate">
						<?php //echo paginate_links(array(
							//'total' => $postsAvion->max_num_pages
						//)); ?>
						</div> -->
			<?php
				else :
						echo '<p class="no-content">No encontramos ningún contenido</p>';
				endif;
				wp_reset_postdata();
			?>
				<span id="mas">
					<a href="<?php echo esc_url(get_category_link(get_cat_ID('Mi avión que va'))); ?>">Más ...</a>
				</span>