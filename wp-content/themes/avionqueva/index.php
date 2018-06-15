<?php get_header(); ?>
<div class="todo">
	<div class="uk-container">
		<!-- <div class="paginate">
			<?php  // echo paginate_links();?>
		</div> -->
		<!-- 	ESTO ES EL INDEX.PHP  -->
		
			<?php 
			echo('<div class="clearfix">');
			$primero = true;
		 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
			if ( $paged !== 1) {
				echo('<section class="main-column clearfix">');
			}			
			// $sticky_posts = get_option( 'sticky_posts' );
			//  $countSticky = count($sticky_posts);
			//  $queryMinusSticky = 10 - $countSticky;
			
			$postsFirst = 9;
		 	$postsLater = 8;
		 	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            if ($paged == 1) {
                global $wp_query; 
				query_posts(
					array_merge(
						array(
						'posts_per_page' => $postsFirst  // $queryMinusSticky
						),
						$wp_query->query
					)
				);
            } else { 
           global $wp_query;
				query_posts(
					array_merge(
						array(
						'posts_per_page' => $postsLater,
						'offset' => (($paged * $postsLater) - $postsLater ) + 1
						),
						$wp_query->query
					)
				);
            } 

			
			if (have_posts()) :
				while(have_posts()) : the_post(); 
					if($primero == true && $paged == 1) { // IF first post AND first page
						get_template_part('portada');
					}
					else { 
						get_template_part('blog');
					}
					$primero = false;
                endwhile;
			
			else :
				echo '<p class="no-content">No encontramos ningún contenido</p>';
				wp_reset_post_data();
			endif;?>
				
		</section> <!-- cierra main column -->
			<aside class="sidebar_container">
				<?php get_sidebar();?>
			</aside>
			
		</div> <!-- cierra clearfix -->
		<div class="paginate">
			<?php echo paginate_links();?>
		</div>

		<?php get_footer(); ?>