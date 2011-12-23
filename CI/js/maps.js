function initialize() {
	//set the maps latitude and longitute
    var lat_lng = new google.maps.LatLng(34.005556, -84.575490);

	/* create a Map options object to contain map initialization variables
	** set params for the map object
	** zoom can be between 1-18
	** center is required and must be a valid latitude/longitute
	** mapTypeId: valid identifiers include: ROADMAP, HYBRID, SATELLITE, TERRAIN
	** For more info see: http://code.google.com/apis/maps/documentation/javascript/reference.html
	*/
    var myOptions = {
      	zoom: 17,
      	center: lat_lng,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  
    var map = new google.maps.Map(
		document.getElementById("map_canvas"),
      	myOptions
	);

	var infowindow = new google.maps.InfoWindow( { 
		content: '<small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=840+Ernest+W.+Barrett+Parkway,+Kennesaw,+GA+30144&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=42.581364,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=840+Ernest+W.+Barrett+Pkwy,+Kennesaw,+Georgia+30144&amp;ll=34.057211,-84.566574&amp;spn=0.199105,0.343323&amp;z=11&amp;iwloc=A" style="color:#0000FF;text-align:left"><Bold>Cornerstone Kitchen and Baths</Bold> <br /> Address: 840 Ernest W. Barrett Parkway</a></small>',
	    size: new google.maps.Size(50,50),
	    position: lat_lng
	});
	
	var marker = new google.maps.Marker({
    	position: lat_lng, 
    	map: map,
      	title:"Cornerstone Kitchen and Bath"
  	});

	var click_event = false;
	
	google.maps.event.addListener(marker, 'click', function() {
		if (!click_event) {
			infowindow.open(map);
			click_event = true;
		}
		else {
			infowindow.close();
			click_event = false;
		}

	});	
  }