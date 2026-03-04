<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ) ?>" />
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"><?php _e( 'Address:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" value="<?php echo esc_attr( $address ) ?>" />
	<small><?php _e( 'Choose either an address or latitute and logtitude', 'construction' )?></small>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'latitude' ) ); ?>"><?php _e( 'Latitude:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'latitude' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'latitude' ) ); ?>" type="text" value="<?php echo esc_attr( $latitude ) ?>" />
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'longitude' ) ); ?>"><?php _e( 'Longitude:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'longitude' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'longitude' ) ); ?>" type="text" value="<?php echo esc_attr( $longitude ) ?>" />
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'zoom' ) ); ?>"><?php _e( 'Zoom level:', 'construction' ); ?></label>
	<select id="<?php echo esc_attr( $this->get_field_id( 'zoom' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'zoom' ) ); ?>">
		<?php for($i=1; $i<20; $i++): ?>
			<option <?php selected( $zoom, $i ) ?>><?php echo intval( $i ) ?></option>
		<?php endfor ?>
	</select>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'html' ) ); ?>"><?php _e( 'Content for the marker:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'html' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'html' ) ); ?>" type="text" value="<?php echo esc_attr( $html ) ?>" />
</p>

<p>
	<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'popup' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'popup' ) ); ?>"<?php checked( $popup ); ?> />
	<label for="<?php echo esc_attr( $this->get_field_id( 'popup' ) ); ?>"><?php _e( 'Auto popup the info?', 'construction' ); ?></label>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>"><?php _e( 'Height:', 'construction' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'height' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'height' ) ); ?>" type="text" value="<?php echo esc_attr( $height ) ?>" />
</p>