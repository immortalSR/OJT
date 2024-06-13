( function( api ) {

	// Extends our custom "sports-league" section.
	api.sectionConstructor['sports-league'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );