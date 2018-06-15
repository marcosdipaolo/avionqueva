<?php get_header();?>
<div class="uk-container  ">
	<!-- <div class="paginate">
		<?php // echo paginate_links();?>
	</div> -->
	<!-- 	ESTO ES ARCHIVO PARA AUDIO  -->
	<div class="clearfix">



		<?php if (have_posts()) : ?>

		<h3 class="titulo-archive">
			<?php 
			 echo 'Artículos del formato: Audio' ?>
		</h3>
		<section class="main-column clearfix">

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

	</div>
	<aside class="sidebar_container">
		<?php get_sidebar();?>
	</aside>
</div>


<?php get_footer(); ?>