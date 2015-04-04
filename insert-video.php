<?php
/*
Plugin Name: Embed Video - YOBD Digital
Plugin URI: http://yobd.github.io/yav/
Description: Add Videos with shortcode from the page url
Version: 1.0.0
Author: YOBD Digital
Author URI: http://yobd.github.io/yav/
License: GPL3
*/

/*
Copyright 2015 YOBD Digital
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 3, as
published by the Free Software Foundation.
 
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
function insert_video($atts, $content = null) {

	function convertYoutube($string) {
		return preg_replace(
			"/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			"//www.youtube.com/embed/$2",
			$string
		);
	}

	return '<iframe width="640" height="360" src="' . convertYoutube($content) . '" frameborder="0" allowfullscreen></iframe>';
}
 
add_shortcode('video', 'insert_video');


?>
