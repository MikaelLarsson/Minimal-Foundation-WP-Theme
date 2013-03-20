<?php

// --------------------------------
// REGISTER SCRIPTS
// --------------------------------

function foundation_register_scripts() {

	// Modernizr
	wp_register_script(
		'modernizr', // Handle
		get_bloginfo('stylesheet_directory').'/js/vendor/custom.modernizr.js' // Source
	);

	// Foundation
	wp_register_script(
		'foundation', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation.min.js', // Source
		array( 'jquery' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Alerts
	wp_register_script(
		'foundation_alerts', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.alerts.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Clearing
	wp_register_script(
		'foundation_clearing', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.clearing.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Cookie
	wp_register_script(
		'foundation_cookie', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.cookie.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Dropdown
	wp_register_script(
		'foundation_dropdown', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.dropdown.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Forms
	wp_register_script(
		'foundation_forms', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.forms.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Joyride
	wp_register_script(
		'foundation_joyride', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.joyride.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Magellan
	wp_register_script(
		'foundation_magellan', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.magellan.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Orbit
	wp_register_script(
		'foundation_orbit', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.orbit.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Placeholder
	wp_register_script(
		'foundation_placeholder', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.placeholder.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Reveal
	wp_register_script(
		'foundation_reveal', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.reveal.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Section
	wp_register_script(
		'foundation_section', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.section.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Tooltips
	wp_register_script(
		'foundation_tooltips', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.tooltips.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// Foundation Topbar
	wp_register_script(
		'foundation_topbar', // Handle
		get_bloginfo('stylesheet_directory').'/js/foundation/foundation.topbar.js', // Source
		array( 'foundation' ), // Dependencies
		'', // Version
		true // Run in footer?
	);

	// App
	wp_register_script(
		'app', // Handle
		get_bloginfo('stylesheet_directory').'/js/app.js', // Source
		
		// Dependencies - Add more dependencies to extend the capabilies of the site as needed.
		array( 
			'jquery', 
			'foundation'
		),
		'', // Version
		true // Run in footer?
	);

	// HTML5 Shim
	wp_register_script(
		'foundation_section', // Handle
		'http://html5shim.googlecode.com/svn/trunk/html5.js', // Source
		'', // Dependencies
		'', // Version
		false // Run in footer?
	);
}
add_action( 'init', 'foundation_register_scripts' );

// --------------------------------
// ENQUEUE SCRIPTS
// --------------------------------

function foundation_enqueue_scripts() {
	if( !is_admin() ) {
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'app' );
		
		// Load HTML5 Shim for IE browsers only
		if ( true === $is_IE ) {
			add_action('wp_head', 'add_ie_html5_shim');
		}
	}
}
add_action('wp_print_scripts', 'foundation_enqueue_scripts');
?>