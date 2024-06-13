( function( api ) {

	// Extends our custom "gamers-hub" section.
	api.sectionConstructor['gamers-hub'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );