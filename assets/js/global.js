( function( $ ) {

	"use strict";

	/*-------------------------------------------------------
	Geting the header height
	-------------------------------------------------------*/

	function headerHeight() {
		var headerHeight = $( '.header' ).height();
		document.documentElement.style.setProperty( '--header-height', headerHeight + 'px' );
	}

	/*-------------------------------------------------------
	Geting the footer height
	-------------------------------------------------------*/

	function footerHeight() {
		var footerHeight = $( '.footer' ).height();
		document.documentElement.style.setProperty( '--footer-height', footerHeight + 'px' );
	}

	/*-------------------------------------------------------
	Fire on window load
	-------------------------------------------------------*/

	$( window ).on( 'load.turanga', function() {
		headerHeight();
		footerHeight();
	} );

	/*-------------------------------------------------------
	Fire on window resize
	-------------------------------------------------------*/

	$( window ).on( 'resize.turanga', function() {
		headerHeight();
		footerHeight();
	} );

} )( jQuery );
