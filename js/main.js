( function( $ ) {

	"use strict";

	var generateMap = function() {

		// Create a map object, and include the MapTypeId to add
		// to the map type control.
		var mapOptions = {
			zoom: 14,
			center: new google.maps.LatLng(50.5875838,5.5702195),
			disableDefaultUI: true,
			mapTypeControlOptions: {
			  mapTypeIds: [google.maps.MapTypeId.ROADMAP]
			}
		};

		var map = new google.maps.Map(document.getElementById("gmap"),
		mapOptions);

	}

	$( function () {

		generateMap();

	} );

} )( jQuery );