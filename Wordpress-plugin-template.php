<!--
//2021-03-13
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
-->

<?
/*
Plugin Name: Seckin Plugin
Plugin URI: https://www.seckin.co
Description: Seckin tarafından özel eklenti olarak hazırlanmıştır. 
Version: Versiyon 0.1
Author: seckin.co
Author URI: seckin.co
License: GNU
*/
error_reporting(0);
add_action("init","seckin_plugin_shortcodes");

function seckin_plugin_shortcodes()
{
	add_shortcode("seckin_veri_durum", "seckin_plugin_durum");
}	


function seckin_plugin_durum($e_durum,$content_durum){
	
	// Everything you write here will appear on the page where you paste the [seckin_veri_durum] tag.
		
}

?>