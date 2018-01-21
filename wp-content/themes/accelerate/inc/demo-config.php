<?php
/**
 * Functions for configuring demo importer.
 *
 * @author   ThemeGrill
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer packages.
 *
 * @param  array $packages
 * @return array
 */
function accelerate_demo_importer_packages( $packages ) {
	$new_packages = array(
		'accelerate-free' => array(
			'name'    => esc_html__( 'Accelerate', 'accelerate' ),
			'preview' => 'http://demo.themegrill.com/accelerate/',
		),
	);

	return array_merge( $new_packages, $packages );
}

add_filter( 'themegrill_demo_importer_packages', 'accelerate_demo_importer_packages' );
