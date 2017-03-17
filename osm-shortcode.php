<?php
/**
 * Plugin Name:     OSM Shortcode
 * Plugin URI:      https://github.com/miya0001/miya-osm-shortcode
 * Description:     Open Street Map shortcode for WordPress
 * Author:          Takayuki Miyauchi
 * Author URI:      https://miya.io/
 * Version:         0.1.0
 *
 * @package         OSM_Shortcode
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
