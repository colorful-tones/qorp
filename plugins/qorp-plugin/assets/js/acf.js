jQuery( document ).ready( function( $ ) {
	if ( typeof acf !== 'undefined' ) {
		acf.add_filter('color_picker_args', function( args ){
			// Grab theme's color palette from theme.json.
			const settings = wp.data.select( 'core/editor' ).getEditorSettings();
			// Limit ACF's color picker to theme's palette.
			let colors = settings.colors.map(x => x.color);

			args.palettes = colors;
			return args;
		});
	}
});