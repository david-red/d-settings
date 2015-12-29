<h3><?php _e( 'Settings Manager', 'ds' ); ?></h3>

<form method="post" action="">

	<?php
		$settings = settings_list();

		foreach ( $settings as $setting )
		{
			switch ( $setting['type'] )
			{
				case 'textarea':
					DS_Form::textarea( $setting['title'], $setting['name'], $setting['tooltip'], $setting['class'], $setting['row'] );
					break;
			}
		}
	?>

	<input type="submit" value="<?php _e( 'Save settings', 'ds' ); ?>" class="btn btn-info">

</form>
