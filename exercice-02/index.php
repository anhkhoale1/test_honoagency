<?php
/*
Plugin Name: Plugin Test
Description: Afficher les réseaux sociaux
Author: Anh Khoa LE
*/

function shortcode_network($atts){
	$value = shortcode_atts( array(
		'facebook' => 'anhkhoa.le.7528/',
		'instagram' => 'akhoalee/',
		'linkedin' => 'anhkhoa-le/',
		'github' => 'anhkhoale1/'
	), $atts);

    return '
    	<ul>
    		<li><a href="https://www.facebook.com/'. $value['facebook'] .'">Facebook</a></li>
    		<li><a href="https://www.instagram.com/'. $value['instagram'] .'">Instagram</a></li>
    		<li><a href="https://www.linkedin.com/in/'. $value['linkedin'] .'">LinkedIn</a></li>
    		<li><a href="https://github.com/'. $value['github'] .'">GitHub</a></li>
    	</ul>
    ';

}
add_shortcode('show_social_network', 'shortcode_network');

?>