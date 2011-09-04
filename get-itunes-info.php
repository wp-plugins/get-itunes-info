<?php
/*
Plugin Name: Get iTunes Info
Plugin URI: http://wpgiraffe.com/2011/08/29/plugin-get-itunes-info/
Description: Creates a shortcode to display some iTunes info about an app
Version: 0.9
Author: Jason Mayoff
Author URI: http://wpgiraffe.com
License: GPL2
*/

/*  Copyright 2011  Jason Mayoff (email : jmayoff+plugins@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/





?>

<?php 

// This file added by Jason to add new functions to the theme


function jm_get_app_current_price($jm_itunes_id){
	
		// Parse out the id from the shortcode attributes	
		// If no id is given, we default to zero. We should throw back an error
		// so user knows they messed up.
		
		extract( shortcode_atts( array(
			'id' => 0,
			'full' => 'yes'
		), $jm_itunes_id ) );
	
		$app_id = $id; 
		
		// echo "ID:". $id;
		
	// Function will use the iTunes API to get an apps current price
	// We require an app's id number and will return the price
		
		
		// Get the iTunes data 
		$app_url = 'http://itunes.apple.com/lookup?id=' . $app_id;
		$itunes_data = trim(file_get_contents ($app_url));
	
		
		// Decode the JSON string returned 
		$decoded = json_decode("$itunes_data",true);
	
		// The price is several levels deep, so let's dig down
		// There's probably a more "right" way to do this, but for now...
	
		$decoded2 = $decoded[results];
		$results = $decoded2[0]; 
		 
		// Now we're at the right level (results), so let's set the price 
		
		$the_price = $results["price"];	
	
		// If an id of 0 is given or no id is included in the shortcode, we throw an error
		if($id == 0){
			$the_price = "err";
		}
	
	
		if($full == "yes"){
			$html_to_return = "Current Price: $" . $the_price; 
		}else{
			$html_to_return = $the_price;
		}
	
	return $html_to_return;	
	
}

add_shortcode( 'itunesprice', 'jm_get_app_current_price' );



?>