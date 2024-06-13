( function( api ) {

	// Extends our custom "hockey-sports" section.
	api.sectionConstructor['hockey-sports'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );