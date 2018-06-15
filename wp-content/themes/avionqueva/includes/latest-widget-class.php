<?php
// Creating the widget 
class di_latest_post_widget extends WP_Widget {
 
	function __construct() {
	parent::__construct(
	
	// Base ID of your widget
	'di_latest_post_widget', 
	
	// Widget name will appear in UI
	'DI - Últimos artículos por categorías', 
	
	// Widget description
	array( 'description' =>  'Widget de últimos artículos con imagen destacada y selección opcional por categoría' ) 
	);
	}
	
	// Creating widget front-end
	
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$numPost = $instance['numPost'];
		$categ = $instance['categ'];

	
	// before and after widget arguments are defined by themes
		echo ($args['before_widget']);
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
	
	// This is where you run the code and display the output
		
	
	// var_dump($categ);
		$query = new WP_Query(array(
			'post_type'      =>  'post',
			'cat'      =>  $categ,
			'posts_per_page' => $numPost,
			'ignore_sticky_posts' => true
		)); ?>
	
			<div class="di-custom-latest">
				<?php if ($query->have_posts()) {
			while($query->have_posts()) {
				$query->the_post();
				get_template_part('di-latest-widget');
		  }
		} else {
			echo('<p>No se encontró contenido</p>');
		} ?>
			</div>

			<?php 

			wp_reset_postdata();
			
				echo $args['after_widget'];
			}
         
// Widget Backend 

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ]; }
		else {
			$title = 'Últimos artículos - Categoría';
		}
		if ( isset( $instance ['numPost'] ) ) {
			$numPost = $instance[ 'numPost' ]; }
		else {
			$numPost = __( 3 , 'di-news-blog' );
		}
		if ( isset( $instance ['categ'] ) ) {
			$categ = $instance[ 'categ' ];
			 }
		else {
			$categ = [];
		}
		$cats = get_terms(array(
				'taxonomy' => 'category',
				'hide_empty' => false,
		));
		// Widget admin form
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'di-news-blog' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		<label for="<?php echo $this->get_field_id( 'numPost' ); ?>"><?php _e( 'Número de artículos:' , 'di-news-blog' ); ?></label> 
		<input style="margin-top: 15px" class="tiny-text" id="<?php echo $this->get_field_id( 'numPost' ); ?>" name="<?php echo $this->get_field_name( 'numPost' ); ?>" type="number" step="1" min="1" max="10" value="<?php echo esc_attr( $numPost ); ?>" size="3"><br><br>
		<label for="<?php echo $this->get_field_id( 'categ' ); ?>"><?php _e( 'Seleccioná la/s categoría/s:' , 'di-news-blog' ); ?></label> 
		<select  multiple style="height:200px" id="<?php echo $this->get_field_id( 'categ' ); ?>" name="<?php echo $this->get_field_name( 'categ' );?>[]">
			<option value="" style="margin-bottom:3px;"><?php _e('All categories', 'di-news-blog') ?></option>
		<?php 
			for ($i=0; $i < count($cats); $i++) { 
				printf(
						'<option value="%s" %s style="margin-bottom:3px;">%s</option>',
						$cats[$i]->term_id,
						in_array( $cats[$i]->term_id, $categ) ? 'selected="selected"' : '',
						$cats[$i]->name
				);
			?>
			<?php }	?>	
		
		</select>
		</p>
		<?php 
	}
     
// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['numPost'] = ( ! empty( $new_instance['numPost'] ) ) ? strip_tags( $new_instance['numPost'] ) : '';
		$instance['categ'] = ( ! empty( $new_instance['categ'] ) ) ? esc_sql( $new_instance['categ'] ) : '';
		return $instance;
	}
} // Class di_widget ends here