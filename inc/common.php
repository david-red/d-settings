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
 * Update a setting
 *
 * @param string $name
 * @param mixed $value
 *
 * @return void
 */
function update_setting( $name, $value )
{
	$settings = get_option( 'd-settings' );
	if ( ! empty( $settings[$name] ) )
	{
		$settings[$name] = $value;
		update_option( 'd-settings', $settings );
	}
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
			'title'     => __( 'Footer Text', 'ds' ),
			'name'      => 'footer_text',
			'type'      => 'textarea',
			'tooltip'   => __( 'Add text to footer area', 'ds' ),
		),
		array(
			'title'     => __( 'Total Hit', 'ds' ),
			'name'      => 'total_hit',
			'type'      => 'number',
			'tooltip'   => __( 'Total visits', 'ds' ),
			'min'       => 0,
			'max'       => 9999999,
		),
		/*
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
		*/
	);

	return $settings;
}