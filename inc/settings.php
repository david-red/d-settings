<h3><?php _e( 'Settings Manager', 'ds' ); ?></h3>

<form method="post" action="">

	<?php
		$settings = settings_list();

		foreach ( $settings as $setting )
		{
			$title      = $setting['title'];
			$name       = $setting['name'];
			$tooltip    = empty( $setting['tooltip'] ) ? '' : $setting['tooltip'];
			$class      = empty( $setting['class'] ) ? '' : $setting['class'];

			switch ( $setting['type'] )
			{
				case 'textarea':
					DS_Form::textarea( $title, $name, $tooltip, $class, empty( $setting['row'] ) ? 5 : $setting['row'] );
					break;
				case 'text':
					DS_Form::text( $title, $name, $tooltip, $class );
					break;
				case 'number':
					DS_Form::number( $title, $name, $tooltip, $class, empty( $setting['min'] ) ? 0 : $setting['min'], empty( $setting['max'] ) ? 100 : $setting['max'] );
					break;
				case 'checkbox':
					DS_Form::checkbox( $title, $name, $tooltip, $class );
					break;
				case 'select':
					DS_Form::select( $title, $name, $setting['data'], $tooltip, $class );
					break;
			}
		}
	?>

	<input type="submit" value="<?php _e( 'Save settings', 'ds' ); ?>" class="btn btn-info">

</form>
