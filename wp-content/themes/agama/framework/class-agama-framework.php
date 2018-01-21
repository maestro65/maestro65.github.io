<?php

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Agama Framework Class
 *
 * @since Agama v1.0.1
 * @rewritten @since 1.2.9
 */
class Agama_Framework {
	
	/**
	 * Class Constructor
	 *
	 * @since 1.2.9
	 */
	public function __construct() {
		
		self::get_template_parts();
		
	}
	
	/**
	 * Get Template Parts
	 *
	 * @since 1.2.9
	 */
	private static function get_template_parts() {
		get_template_part( 'framework/class-agama-helper' );
		get_template_part( 'framework/class-agama-slider' );
		get_template_part( 'framework/class-agama-core' );
		get_template_part( 'framework/class-agama' );
		get_template_part( 'framework/class-agama-wc' );
		get_template_part( 'framework/class-agama-breadcrumb' );
		get_template_part( 'framework/class-agama-frontpage-boxes' );
		get_template_part( 'framework/widgets/widgets' );
		get_template_part( 'framework/admin/admin-init' );
	}
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
