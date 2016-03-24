<?php
/**
 * Register Fields API configuration
 *
 * @param WP_Fields_API $wp_fields
 */
function example_my_user_starter( $wp_fields ) {

	// Object type: User
	$object_type = 'user';

	// Object subtype: n/a
	$object_subtype = null;

	$field_id   = 'my-field';
	$field_args = array(
		// @todo Add extra args as necessary
	);

	// Add field
	$wp_fields->add_field( $object_type, $field_id, $field_args );

}

add_action( 'fields_register', 'example_my_user_starter' );