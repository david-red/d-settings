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
	public static function text( $title, $name, $tooltip = '', $class = '' )
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
	 * Show number input
	 *
	 * @param string $title
	 * @param string $name
	 * @param string $tooltip
	 * @param string $class
	 * @param int $min
	 * @param int $max
	 *
	 * @return void
	 */
	public static function number( $title, $name, $tooltip = '', $class = '', $min = 0, $max = 100 )
	{
		?>
		<div class="ds-setting clearfix">
			<?php self::label( $title, $tooltip ); ?>
			<div class="ds-input">
				<?php
				printf( '
						<input type="number" name="%s" value="%s" class="%s" min="%d" max="%d">',
					$name,
					sl_setting( $name ),
					$class,
					$min,
					$max
				);
				echo 'abc';
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
	 * Show select option
	 *
	 * @param string $title
	 * @param string $name
	 * @param array $data
	 * @param string $tooltip
	 * @param string $class
	 *
	 * @return void
	 */
	public static function select( $title, $name, $data, $tooltip = '', $class = '' )
	{
?>
		<div class="ds-setting clearfix">
			<?php self::label( $title, $tooltip ); ?>
			<div class="ds-input">
				<select name="<?php echo $name; ?>" <?php echo $class ? 'class="' . $class . '"' : ''; ?>>
				<?php
				foreach ( $data as $k => $v )
				{
					printf( '
						<option value="%s" %s>%s</option>',
						$k,
						$k == sl_setting( $name ) ? 'selected="selected"' : '',
						$v
					);
				}
				?>
				</select>
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