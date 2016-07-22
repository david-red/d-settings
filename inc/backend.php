<?php

class DS_Backend
{
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
		$this->update_settings();
	}

	function menu()
	{
		add_menu_page( 'Settings Manager', 'Site Settings', 'manage_options', 'd-settings', array( $this, 'settings_page' ), 'dashicons-image-crop', 6 );
	}

	/**
	 * Include settings page
	 *
	 * @return void
	 */
	function settings_page()
	{
		include DS_DIR . '/inc/settings.php';
	}

	/**
	 * Enqueue scripts and styles
	 *
	 * @return void
	 */
	function enqueue()
	{
		if ( empty( $_GET['page'] ) || 'd-settings' != $_GET['page'] )
		{
			return;
		}

		wp_enqueue_media();
		wp_enqueue_style( 'ds-backend', DS_URL . '/assets/css/' . 'backend.css' );
		wp_enqueue_script( 'ds-backend', DS_URL . '/assets/js/' . 'backend.js', array( 'jquery' ) );
		wp_enqueue_style( 'bootstrap-css', DS_URL . '/assets/css/bootstrap.min.css' );
		wp_enqueue_script( 'bootstrap-js', DS_URL . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.0.0', true );
	}

	/**
	 * Update settings
	 *
	 * @return void
	 */
	function update_settings()
	{
		if ( empty( $_GET['page'] ) || 'd-settings' != $_GET['page'] || 'POST' != $_SERVER['REQUEST_METHOD'] )
		{
			return;
		}

		$settings       = settings_list();
		$new_settings   = array();

		foreach ( $settings as $setting )
		{
			$value = empty( $_POST[$setting['name']] ) ? '' : $_POST[$setting['name']];

			if ( ! empty( $setting['type'] ) && 'checkbox' == $setting['type'] )
			{
				$value = $value ? 1 : 0;
			}

			$new_settings[$setting['name']] = $value;
		}

		update_option( 'd-settings', $new_settings );
	}
}
new DS_Backend;