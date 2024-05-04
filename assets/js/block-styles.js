wp.domReady( () => {

	// Unregister default button styles
	wp.blocks.unregisterBlockStyle( 'core/button', 'fill' );
	wp.blocks.unregisterBlockStyle( 'core/button', 'outline' );

	// Register large button style
	wp.blocks.registerBlockStyle( 'core/button', {
		name: 'large',
		label: 'Large'
	} );

} );
