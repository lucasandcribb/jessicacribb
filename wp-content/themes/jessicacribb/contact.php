<?php

// Template Name: Contact

get_header(); ?>

	<div id="contact-left">
		<?php get_template_part( 'content', get_post_format() ); ?>
	</div>

	<div id="contact-right">
		<script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
		<div id="map_div"></div>
		<script>
			//GOOGLE MAPS//
			var latlng = new google.maps.LatLng(33.873485,-79.755456);
			var options = {
    			zoom: 15, // This number can be set to define the initial zoom level of the map
    			center: latlng,
    			mapTypeId: google.maps.MapTypeId.ROADMAP // This value can be set to define the map type ROADMAP/SATELLITE/HYBRID/TERRAIN
    		};
    		var map = new google.maps.Map(document.getElementById('map_div'), options);
			var image = new google.maps.MarkerImage('/wp-content/themes/jessicacribb/images/map_pin.png',
    		 	// This marker is 129 pixels wide by 42 pixels tall.
    		 	new google.maps.Size(150, 150),
    		 	// The origin for this image is 0,0.
    		 	new google.maps.Point(0,0),
    		 	// The anchor for this image is the base of the flagpole at 18,42.
    		 	new google.maps.Point(10, 70)
 			);
 			// Add Marker
 			var marker1 = new google.maps.Marker({
    		 	position: new google.maps.LatLng(33.873485,-79.755456),
    		 	map: map,
    		 	icon: image // This path is the custom pin to be shown. Remove this line and the proceeding comma to use default pin
 			});
 			google.maps.event.addListener(marker1, 'click', function() {
   				infowindow1.open(map, marker1);
    		});
		
    		var infowindow1 = new google.maps.InfoWindow({
    		    content:  createInfo('<div id="bublble-title">The Mane Attraction Salon</div>', '<div id="bubble-addr-1">127 West Main St</div><div id="bubble-addr-2">Lake City, SC 29560</div><div id="bubble-phone">(843) 374-4247</div>')
    		});
			function createInfo(title, content) {
    		    return '<div class="infowindow"><strong>'+ title +'</strong>'+content+'</div>';
    		}
    		//END GOOGLE MAPS//
		</script>
		<div id="credits">
			<div class="credits-title">Credits</div>
			<?php $loop = new WP_Query( array( 'post_type' => 'credits', 'order' => 'ASC' ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="credit-title credit-website"><?php the_title(); ?>  <?php the_field('website'); ?></div>
			<?php endwhile; ?>
		</div>
	</div>


<?php get_footer(); ?>