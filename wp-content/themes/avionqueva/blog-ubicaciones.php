<?php if(has_post_thumbnail()) : ?>
	<div class="image-full-post" style="background-image: url('<?php the_post_thumbnail_url("full");?>')"></div>
<?php
else :
?>
<div style="height: 60px;"></div>
<?php
endif;
?> 
<div class="uk-container  ">
	<article class="single-post clearfix">
		
		<!-- 		BLOG-UBICACIONES.PHP	  -->
		<h3 id="titulo-single"><span><?php the_title(); ?></span></h3>

		<!-- <div class="single-post">
			<?php //the_content(); ?>
		</div> -->
        <?php
            global $EM_Location;
            /* @var $EM_Location EM_Location */
			echo  $EM_Location->output_single();
			echo $EM_Location->output("#_LOCATIONMAP");
		?>
		<p class="mini-meta">
			<?php //the_time('l, j \d\e F \d\e Y' );?>Publicado por
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
				<?php the_author(); ?>
			</a>
		</p>
		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
	</article>
</div>