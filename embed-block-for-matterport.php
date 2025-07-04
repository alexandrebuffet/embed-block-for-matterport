<?php
/**
 * Embed Block for Matterport.
 *
 * @package           EmbedBlockForMatterport
 * @author            Alexandre Buffet
 * @copyright         2025 Alexandre Buffet
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Embed Block for Matterport
 * Version:           1.0.1
 * Plugin URI:        https://github.com/alexandrebuffet/embed-block-for-matterport
 * Description:       Adds Matterport oEmbed support and provides a new Embed block variation.
 * Author:            Alexandre Buffet
 * Author URI:        https://alexandrebuffet.fr
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 2.9
 * Requires PHP:      7.1
 * Text Domain:       embed-block-for-matterport
 */

namespace EmbedBlockForMatterport;

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

	$block_editor_script_url = plugin_dir_url( __FILE__ ) . 'build/block-editor.js';

	wp_enqueue_script(
		'embed-block-for-matterport-block-editor-script',
		$block_editor_script_url,
		$block_editor_asset['dependencies'],
		$block_editor_asset['version'],
		true
	);

	wp_set_script_translations( 'embed-block-for-matterport-block-editor-script', 'embed-block-for-matterport' );
}

add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_block_editor_assets' );
