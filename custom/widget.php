<?php
// Register and load the widget
if( ! function_exists('zp_load_widget') ){
	function zp_load_widget() {
		register_widget( 'zp_property_slider_widget' );
	}
}

add_action( 'widgets_init', 'zp_load_widget' );
 
// Creating the widget 
if( ! class_exists('zp_property_slider_widget') ){
	class zp_property_slider_widget extends WP_Widget {
		 
		function __construct() {
			parent::__construct(
			 
				// Base ID of your widget
				'zp_property_slider_widget', 
				 
				// Widget name will appear in UI
				__('ZipperAgent Property Slider', 'zipperagent'), 
				 
				// Widget description
				array( 'description' => __( 'Display properties slider widget', 'zipperagent' ), ) 
			);
		}
		 
		// Creating widget front-end
		 
		public function widget( $args, $instance ) {
			$title = apply_filters( 'widget_title', $instance['title'] );
			 
			// before and after widget arguments are defined by themes
			echo $args['before_widget'];
			if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
			 
			// This is where you run the code and display the output
			echo do_shortcode('[own_listing_slider]');
		}
				 
		// Widget Backend 
		public function form( $instance ) {
			if ( isset( $instance[ 'title' ] ) ) {
				$title = $instance[ 'title' ];
			}
			else {
				$title = __( 'New title', 'zipperagent' );
			}
			// Widget admin form
			?>
			<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</p>
			<?php 
		}
			 
		// Updating widget replacing old instances with new
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			return $instance;
		}
	} // Class zp_property_slider_widget ends here
}