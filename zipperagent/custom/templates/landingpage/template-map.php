<?php
global $post;

$address = get_post_meta($post->ID, '_lp_Address', true);

// die($address);
?>

<div id="map" style="height:300px"></div>
<script type="text/javascript">
  
  jQuery(document).ready(function(){
	  var geocoder;
	  var map;
	  var address ="<?php echo $address; ?>";
	  function initMap() {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(-34.397, 150.644);
		var myOptions = {
			zoom: 15,
			center: latlng,
			gestureHandling: 'greedy',
			// mapTypeControl: true,
			// mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			// navigationControl: true,
			// mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById("map"), myOptions);
		if (geocoder) {
		  geocoder.geocode( { 'address': address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
			  if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
			  map.setCenter(results[0].geometry.location);

				var marker = new google.maps.Marker({
					position: results[0].geometry.location,
					map: map, 
					title:address
				}); 

			  } else {
				// alert("No results found");
			  }
			} else {
			  // alert("Geocode was not successful for the following reason: " + status);
			}
		  });
		}
	  }
	  
	  initMap();
  });
</script>