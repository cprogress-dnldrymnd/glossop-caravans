(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	// aux var to store the opened day
	var openedDay = null;

	// change the meta viewport to display correctly the calendar on all devices
	jQuery( 'meta[name="viewport"]' ).attr( 'content', 'width=device-width, initial-scale=1, maximum-scale=1' );

	// click event used to hide the calendar when the user clicks outside
	jQuery( document ).click( function( event ) { 

    	if( !$( event.target ).closest( '.xmas-advent-calendar__wrapper' ).length ) {

        	if( jQuery( '.xmas-advent-calendar__wrapper' ).is( ':visible' ) ) {

            	jQuery( '.xmas-advent-calendar__wrapper' ).removeClass( 'xmas-advent-calendar__wrapper--shown' );

        	}

    	}   

	});

	// avoid hiding the calendar when clicking inside
	$( '.xmas-advent-calendar__wrapper' ).click( function( event ) {
	    
	    event.stopPropagation();

	});

	// calendar movement
	jQuery(document).on('click', '.xmas-advent-calendar__wrapper-toggle', function() {

	 	if( jQuery( '.xmas-advent-calendar__wrapper' ).hasClass( 'xmas-advent-calendar__wrapper--shown' ) ) {

	 		jQuery( '.xmas-advent-calendar__wrapper' ).removeClass( 'xmas-advent-calendar__wrapper--shown' );

	 	}
	 	else {

	 		jQuery( '.xmas-advent-calendar__wrapper' ).addClass( 'xmas-advent-calendar__wrapper--shown' );

	 	}
	});

	// open a day
	jQuery(document).on('click', '.xmas-advent-calendar__day-wrapper--allowed', function( event ) {

		event.stopPropagation();

		// if we have to close it later, store the day
		if ( !jQuery( this ).find( '.xmas-advent-calendar__day-background' ).hasClass( 'xmas-advent-calendar__day-wrapper--opened' ) ) {
		
			openedDay = jQuery( this );

		}

		// open the day
		jQuery( this ).find( '.xmas-advent-calendar__day-background' ).addClass( 'xmas-advent-calendar__day-wrapper--opened' );

		// disable scroll on body
		jQuery( 'body' ).addClass( 'modal-open' );

		// hide all contents
		jQuery( '.xmas-advent-calendar__modal-header' ).css( "display", "none" );
		jQuery( '.xmas-advent-calendar__modal-code' ).css( "display", "none" );

		// show the content that matches the day
		jQuery( '#xmas-advent-calendar__modal-header-' + jQuery( this ).attr( 'data-id' ) ).css( "display", "block" );
		jQuery( '#xmas-advent-calendar__modal-code-' + jQuery( this ).attr( 'data-id' ) ).css( "display", "block" );

		jQuery( '.xmas-advent-calendar__modal' ).css( "display", "block" );

		// modal animation
		jQuery( '.xmas-advent-calendar__modal' ).animate( {

			opacity: 1
		
		}, 500, function() {
			// end callback
			
			// animate content
			jQuery( '.xmas-advent-calendar__modal__content' ).addClass( 'xmas-advent-calendar__modal__content--show' );

			setTimeout(function() {
				
				// do a resize to avoid weird issues concerning height and scroll on the modal content
				jQuery(window).trigger('resize');

			}, 600);
			
		});

	});
	
	// close the modal
	jQuery(document).on('click', '.xmas-advent-calendar__modal .close-button', function( event ) {

		event.stopPropagation();

	 	// modal animation
	 	jQuery( '.xmas-advent-calendar__modal' ).animate( {

	 		opacity: 0
	 	
	 	}, 500, function() {

	 		// end callback

	 		// hide modal
	 		jQuery( '.xmas-advent-calendar__modal' ).css( "display", "none" );
	 		
	 		// animate content
	 		jQuery( '.xmas-advent-calendar__modal__content' ).removeClass( 'xmas-advent-calendar__modal__content--show' );

	 		if( openedDay != null ) {
	 			
	 			openedDay.find( '.xmas-advent-calendar__day-background' ).removeClass( 'xmas-advent-calendar__day-wrapper--opened' );

	 		}

	 		// enable scroll on body
			jQuery( 'body' ).removeClass( 'modal-open' );
	 	});

	});

})( jQuery );
