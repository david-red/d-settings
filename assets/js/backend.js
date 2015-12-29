jQuery( function( $ )
{
	$( '[data-toggle="tooltip"]' ).tooltip().on( 'click', function ( e )
	{
		e.preventDefault();
	} );

} );