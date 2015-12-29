<?php
class DS_Form
{
	/**
	 * Show text input
	 *
	 * @param string $title
	 * @param string $name
	 * @param string $tooltip
	 * @param string $class
	 *
	 * @return void
	 */
	public static function text_input( $title, $name, $tooltip = '', $class = '' )
	{
?>
		<div class="ds-setting clearfix">
			<?php self::label( $title, $tooltip ); ?>
			<div class="ds-input">
				<?php
					printf( '
						<input type="text" name="%s" value="%s" class="form-control %s">',
						$name,
						sl_setting( $name ),
						$class
					);
				?>

			</div>
		</div>
<?php
	}

	/**
	 * Show checkbox
	 *
	 * @param string $title
	 * @param string $name
	 * @param string $tooltip
	 * @param string $class
	 *
	 * @return void
	 */
	public static function checkbox( $title, $name, $tooltip = '', $class = '' )
	{
?>
		<div class="ds-setting clearfix">
			<?php self::label( $title, $tooltip ); ?>
			<div class="ds-input">
				<?php
				printf( '
					<input type="checkbox" name="%s" %s %s>',
					$name,
					$class ? 'class="' . $class . '"' : '',
					1 == sl_setting( $name ) ? 'checked="checked"' : ''
				);
?>
			</div>
		</div>
		<?php
	}

	/**
	 * Show textarea
	 *
	 * @param string $title
	 * @param string $name
	 * @param string $tooltip
	 * @param string $class
	 * @param int $row
	 *
	 * @return void
	 */
	public static function textarea( $title, $name, $tooltip = '', $class = '', $row = 5 )
	{
		?>
		<div class="ds-setting clearfix">
			<?php self::label( $title, $tooltip ); ?>
			<div class="ds-input">
				<?php
				printf( '
						<textarea name="%s" class="form-control %s" rows="%d">%s</textarea>',
					$name,
					$class,
					$row,
					sl_setting( $name )
				);
				?>

			</div>
		</div>
		<?php
	}

	/**
	 * Show label
	 *
	 * @param string $title
	 * @param string $tooltip
	 *
	 * @return void
	 */
	public static function label( $title, $tooltip = '' )
	{
?>
		<div class="ds-label">
			<?php echo $title; ?>
			<?php
			if ( $tooltip )
			{
				printf( '<a href="" data-toggle="tooltip" title="%s">(?)</a>', $tooltip );
			}
			?>
		</div>
<?php
	}
}