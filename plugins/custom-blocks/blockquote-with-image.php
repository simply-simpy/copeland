<?php
/**
 * Plugin Name: Block Quote with Image
 * Author: Scott Simpson
 * Version: 1.0.0
 */

function loadBlockQuoteWithImage() {
	wp_enqueue_script(
		'blockquote-with-image',
		plugin_dir_url(__FILE__) . 'blockquote-with-image.js',
		array('wp-blocks','wp-editor'),
		true
	);
}

add_action('enqueue_block_editor_assets', 'loadBlockQuoteWithImage');
