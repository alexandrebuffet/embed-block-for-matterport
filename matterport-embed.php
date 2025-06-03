<?php
/**
 * Plugin Name:       Matterport Embed
 * Version:           0.1.0
 * Plugin URI:        https://github.com/bsaweb/matterport-embed
 * Description:       Adds support for Matterport embed. Paste the link of your 3D model in the block editor, and you’re done.
 * Author:            Alexandre Buffet
 * Author URI:        https://alexandrebuffet.fr
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 2.9
 * Requires PHP:      7.1
 *
 * @package MatterportEmbed
 */

namespace MatterportEmbed;

/**
 * Exit if called directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Adds the Matterport oEmbed provider.
 */
function add_oembed_provider() {
	wp_oembed_add_provider(
		'#https?://(www\.)?my\.matterport\.com/show/\?m=.*#i',
		'https://my.matterport.com/api/v1/models/oembed/',
		true
	);
}

add_action( 'init', __NAMESPACE__ . '\add_oembed_provider' );

/**
 * Enqueues the block editor assets.
 */
function enqueue_block_editor_assets() {
	$block_editor_asset_path = plugin_dir_path( __FILE__ ) . 'build/block-editor.asset.php';

	if ( ! file_exists( $block_editor_asset_path ) ) {
		return;
	}

	$block_editor_asset = require $block_editor_asset_path;

	$block_editor_assets_path = plugin_dir_path( __FILE__ ) . 'build/block-editor.js';

	wp_enqueue_script(
		'matterport-embed-block-editor',
		$block_editor_assets_path,
		$block_editor_asset['dependencies'],
		$block_editor_asset['version'],
		true
	);

	wp_set_script_translations( 'matterport-embed-block-editor', 'matterport-embed' );
}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
