<?php 
if (!is_single()) :
	get_template_part( 'blog');
else : 
	if(has_post_thumbnail()) : ?>
	<div class="image-full-post" style="background-image: url('<?php the_post_thumbnail_url("full");?>'); background-position: 50% 20%;"></div>
	<?php else :
	?>
	<div style="height: 60px;"></div>
	<?php
	endif;
	?>
	<audio class="audio-format" src="<?php the_field('audio'); ?>" controls></audio>
<!-- 		BLOG-AUDIO.PHP	  -->
<div class="uk-container  ">
	<!-- <section class="main-column clearfix"> -->
	<article class="single-post clearfix">
		
		<p class="mini-meta audio"><?php the_field('titulo');?>, <?php the_field('interprete');?>. <?php the_field('album');?>. <?php the_field('año');?></p>
		<h3 id="titulo-single"><span><?php the_title(); ?></span></h3>
		<p class="mini-meta">
			<?php the_time('l, j \d\e F \d\e Y' );?> | Publicado por
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
				<?php the_author(); ?>
			</a>
			<?php
		// get_template_part('post-format');
		// get_template_part('categoria');
		?>
		</p>
		<div class="share-single clearfix">
				
				<?php
				
				get_template_part('socialsingle');
			?>
			</div>


		<div class="single-post">
			<?php the_content(); ?>
		</div>
		<?php 
				if (get_field('creditos_abajo')) { ?>
			<div class="creditos-abajo">
				<p style="padding: 0; margin:0"><?php the_field('creditos_abajo') ?></p>
			</div>
				
		<?php
			}
		?>
		<div class="share-single clearfix">
				<?php
				get_template_part('socialsingle');
			?>
		</div>
		<?php 
		$tags = get_the_tag_list($before = '<li>', $sep='</li><li>', $after = '</li>');
		if( count( $tags) > 0) {
			echo '<div id="etiquetas">';
			echo '<h4 class="titulo-etiquetas">Etiquetas: </h4>';
			echo '<ul>';
			echo $tags;
			echo '</ul>';
			echo '</div>';
		}
		?>
		
	</article>
	<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
	<?php
	endif;
?>