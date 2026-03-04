<?php

class wpv_contactinfo extends WP_Widget {
	private $fields = array();

	public function __construct() {
		$widget_ops = array(
			'classname'   => 'wpv_contactinfo',
			'description' => __( 'Display contact information.', 'construction' )
		);
		parent::__construct( 'wpv_contactinfo', __( 'Vamtam - Contact Info', 'construction' ) , $widget_ops );

		$this->fields = array(
			'title'     => array('description' => __( 'Title:', 'construction' )),
			'name'      => array('description' => __( 'Name:', 'construction' )),
			// 'text'   => array('description' => __('Introduction text:', 'construction')),
			'phone'     => array('description' => __( 'Phone:', 'construction' )),
			'cellphone' => array('description' => __( 'Cell phone:', 'construction' )),
			'mail'      => array('description' => __( 'Email:', 'construction' )),
			'address'   => array('description' => __( 'Address:', 'construction' )),
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );

		foreach ( $this->fields as $name => &$field ){
			$field['value'] = isset($instance[$name]) ? $instance[$name] : '';
		}

		unset($field);

		$title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$color = $instance['color'];

		include(locate_template( 'templates/widgets/front/contactinfo.php' ));
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		foreach ( $this->fields as $name => $field ) {
			$instance[$name] = $new_instance[$name];
		}

		$instance['color'] = $new_instance['color'];

		return $instance;
	}

	public function form( $instance ) {
		foreach ( $this->fields as $name => &$field) {
			$field['value'] = isset($instance[$name]) ? esc_attr( $instance[$name] ) : '';
		}
		unset($field);

		$color = $instance['color'];

		include locate_template( 'templates/widgets/conf/contactinfo.php' );
	}
}
register_widget( 'wpv_contactinfo' );
