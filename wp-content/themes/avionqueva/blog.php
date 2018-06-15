<article class="post uk-text-center">
<?php 
get_template_part('ribbon');
?>

   <div class="uk-card uk-card-default uk-card-hover">
         <!-- BLOG PHP -->
      <?php
      if (get_theme_mod('di_default_image') == NULL || get_theme_mod('di_default_image') == '') {
        $defaultThumbImage = get_theme_file_uri() . '/img/comodin.jpg';
      } else {
        $defaultThumbImage = get_theme_mod('di_default_image');
      }
      if (has_post_video()) {
			// get_the_post_video_image_url( $post_id )
			?>
			<a href="<?php the_permalink(); ?>">
			<div class="uk-card-media-top post-thumbnail" style="background-image: url('<?php echo get_the_post_video_image_url();?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
			</div>
			</a>
			<?php }
      else if (has_post_thumbnail()) { ?>
			<a href="<?php the_permalink(); ?>">
			<div class="uk-card-media-top post-thumbnail" style="background-image: url('<?php the_post_thumbnail_url("medium_large");?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
			</div>
			</a>
			<?php }
      else { ?>
			<a href="<?php the_permalink(); ?>">
			<div class="uk-card-media-top post-thumbnail" style="background-image: url('<?php echo $defaultThumbImage; ?>');background-repeat: no-repeat; background-size: cover; background-position: center;">
			</div>
			</a>
		<?php }

?>
         <div class="uk-card-body">
            <h4 class="uk-card-title">
               <a href="<?php the_permalink(); ?>">
                  <span>
                     <?php the_title(); ?>
                  </span>
               </a>
            </h4>
            <p>
               <?php echo excerpt(12); ?>
            </p>
         </div>
         <p class="mini-meta">
               <?php
               if( get_the_author() != 'Avion que va') {?>
                    Por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();} ?></a>
            <?php //the_time('d/m/Y');
            if (get_field('creditos_arriba')) {
                  echo (' ');
                 the_field('creditos_arriba'); 
            }
         // get_template_part('post-format');
         // get_template_part('categoria');
            ?>
         </p>
   </div>
</article>