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
		),
		array(
			'title'     => __( 'Test 2', 'ds' ),
			'name'      => 'test12',
			'type'      => 'checkbox',
			'tooltip'   => 'ef',
		),
		array(
			'title'     => __( 'Test 3', 'ds' ),
			'name'      => 'test13',
			'type'      => 'text',
			'tooltip'   => 'sfsf',
		),
		array(
			'title'     => __( 'Test 4', 'ds' ),
			'name'      => 'test14',
			'type'      => 'select',
			'tooltip'   => 'sfssfsff',
			'data'      => array(
				'1' => __( 'One', 'ds' ),
				'2' => __( 'Two', 'ds' ),
				'3' => __( 'Three', 'ds' )
			),
		),
	);

	return $settings;
}