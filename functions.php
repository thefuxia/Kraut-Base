<?php # -*- coding: utf-8 -*-
add_action( 'after_setup_theme', array( 'Kraut_Base', 'setup' ) );

class Kraut_Base
{
	public static function setup()
	{
		! isset ( $GLOBALS['content_width'] ) and $GLOBALS['content_width'] = 600;

		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
		add_theme_support( 'automatic-feed-links' );
		// We support all post formats to ease switching themes.
		add_theme_support( 'post-formats' );
		add_theme_support( 'menus' );
	}
}