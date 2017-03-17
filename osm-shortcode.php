<?php
/**
 * Plugin Name:     Osm Shortcode
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     osm-shortcode
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Osm_Shortcode
 */

class OSM_Shortcode
{
	public function __construct()
	{
		add_action( 'init', array( $this, 'init' ) );
	}

	public function init()
	{
		add_shortcode( 'osm', array( $this, 'shortcode' ) );
	}

	public function shortcode( $atts, $contents )
	{
		$atts = shortcode_atts( array(
			'zoom' => '16'
		), $atts, 'osm' );
	}
}

$osm_shortcode = new OSM_Shortcode();
