<?php
/**
 * Themesmandu options
 *
 * @package Themesmandu
 * @subpackage Ghumgham
 * @since Ghumgham 1.0.0
 */

if ( ! function_exists( 'ghumgham_switch_options' ) ) :
	/**
	 * List of custom Switch Control options
	 *
	 * @return array List of switch control options.
	 */
	function ghumgham_switch_options() {
		$arr = array(
			'on'  => esc_html__( 'Enable', 'ghumgham' ),
			'off' => esc_html__( 'Disable', 'ghumgham' ),
		);
		return apply_filters( 'ghumgham_switch_options', $arr );
	}
endif;
