<?php

/**
 * Select a setting
 *
 * @param string $name
 *
 * @return mixed
 */
function sl_setting( $name )
{
	$settings = get_option( 'd-settings' );
	return isset( $settings[$name] ) ? $settings[$name] : '';
}

/**
 * Get settings list
 *
 * @return array
 */
function settings_list()
{
	$settings = array(
		array(
			'title'     => __( 'Test 1', 'ds' ),
			'name'      => 'test11',
			'type'      => 'textarea',
			'tooltip'   => 'abc',
			'class'     => '',
			'row'       => 5,
		),
	);

	return $settings;
}