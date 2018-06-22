$( document ).ready( function()
{
	'use strict';

	new Swiper( '#testimonials_slider', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		parallax: true,
		speed: 1000
	} );

	$( '#contact-form' ).validate( {
		submitHandler: function( form )
		{
			var panel = $( '#contact-panel' );

			panel.portlet( {
				refresh: true
			} );

			$.ajax( {
				type: $( form ).attr( 'method' ),
				url: $( form ).attr( 'action' ),
				data: $( form ).serialize(),
				dataType: 'json',
				success: function( data )
				{
					if( data.sendstatus && data.sendstatus == 1 )
					{
						panel.html( '<div class="alert alert-success" role="alert">' + data.message + '</div>' );
					}
					else
					{
						panel.html( '<div class="alert alert-danger" role="alert">' + data.message + '</div>' );
					}
				},
				error: function( error )
				{
					var msg = "Something went wrong, please try again later.";

					panel.html( '<div class="alert alert-danger" role="alert">' + msg + '</div>' );
				}
			} );

			return false;
		}
	} );
} );