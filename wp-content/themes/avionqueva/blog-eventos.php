<?php if(has_post_thumbnail()) : ?>
<div class="image-full-post" style="background-image: url('<?php the_post_thumbnail_url("full");?>')"></div> 
<?php endif; ?>
<div class="uk-container single">
	<article class="single-post clearfix">
		
		<!-- 		BLOG-EVENTOS.PHP	  -->
		<h3 id="titulo-single"><span><?php the_title(); ?></span></h3>
		<?php				
		get_template_part('socialsingle');
		//the_content(); 
		global $EM_Event;
		echo '<div class="clearfix">';
		echo $EM_Event->output_single();
		echo'</div>';		
		echo $EM_Event->output("#_LOCATIONMAP");
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