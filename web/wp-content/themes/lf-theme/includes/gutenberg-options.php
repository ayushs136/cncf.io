<?php
/**
 * Gutenberg Options
 *
 * Additional settings and functions for Gutenberg
 *
 * @package WordPress
 * @subpackage lf-theme
 * @since 1.0.0
 */

 /**
  * Block Template - Page
  */
function lf_page_block_template() {

	$page_type_object = get_post_type_object( 'page' );

	$page_type_object->template = array(
		array(
			'core/paragraph',
			array(
				'placeholder'   => 'This first introductory paragraph of text should be H3 size lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo',
				'className' => 'has-header-3-font-size is-style-max-900',
			),
		),
		array(
			'core/paragraph',
			array(
				'placeholder' => 'And then change to normal paragraph text lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula get dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate get, arcu. In enim justo, rhoncus ut imperdiet a.',
			),
		),

	);

}
add_action( 'init', 'lf_page_block_template' );

/**
 * Allowed Blocks List (others not styled)
 *
 * @param array $allowed_blocks Blocks array.
 */
function ttp_allowed_block_types( $allowed_blocks ) {
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/button',
		'core/layout',
		'core/group',
		'core/columns',
		'core/text-columns',
		'core/separator',
		'core/shortcode',
		'core/spacer',
		'core/cover',
		'core/media-text',
	);
}
// add_filter( 'allowed_block_types', 'ttp_allowed_block_types' ); // phpcsignore.
