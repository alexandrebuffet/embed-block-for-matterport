# Embed Block for Matterport

[![WordPress Plugin](https://img.shields.io/wordpress/plugin/v/embed-block-for-matterport.svg)](https://wordpress.org/plugins/embed-block-for-matterport/)
[![WordPress Plugin](https://img.shields.io/wordpress/plugin/dt/embed-block-for-matterport.svg)](https://wordpress.org/plugins/embed-block-for-matterport/)
[![WordPress Plugin](https://img.shields.io/wordpress/plugin/r/embed-block-for-matterport.svg)](https://wordpress.org/plugins/embed-block-for-matterport/)
[![License](https://img.shields.io/badge/license-GPLv2-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)

Adds Matterport oEmbed support and provides a new Embed block variation.

## Description

This plugin simply registers Matterport as an oEmbed provider in WordPress, allowing you to easily embed 3D models by pasting their link.

Once activated, simply paste any Matterport model URL into the WordPress Block Editor and it will automatically be embedded as a variation of the "Embed" block.

This works seamlessly in the Block Editor, and pasting a link also works in the Classic Editor, though we recommend using the Block Editor to get the best results and editing experience.

No coding. Just paste and publish.

**Supported Matterport URL formats:**

-   `https://my.matterport.com/show/?m=xxxxxxxxxxx` (11 characters - model ID)
-   `https://my.matterport.com/show/?m=xxxxxxxxxxxxxxxxxxxxxxxx` (25 characters - view ID)

**Note:** Matterport supports two types of IDs:

-   **11 characters:** Model IDs (for complete 3D models)
-   **25 characters:** View IDs (for specific views of a model)

For more information about Matterport models and embedding options, visit the [official Matterport documentation](https://support.matterport.com/s/article/Embed-a-Matterport-3D-Model?language=en_US).

## Installation

### Installation from within WordPress

1. Visit **Plugins > Add New**
2. Search for **Embed Block for Matterport**
3. Install and activate the Embed Block for Matterport plugin

### Manual installation

1. Upload the entire `embed-block-for-matterport` folder to the `/wp-content/plugins/` directory
2. Visit **Plugins**
3. Activate the Embed Block for Matterport plugin

## Requirements

-   WordPress 2.9 or higher
-   PHP 7.1 or higher
-   Tested up to WordPress 6.8

## Frequently Asked Questions

### Is this plugin affiliated with Matterport?

No. This plugin is an independent project and is not affiliated with or endorsed by Matterport.

### Do I need a Matterport account to use this plugin?

No, you just need a public Matterport model link. The plugin enables you to embed models, but does not create them.

### Does it work with shortcode?

Yes! Since this plugin registers Matterport as an oEmbed provider, you can use the native WordPress `[embed]` shortcode with any Matterport model URL. Simply wrap your Matterport URL with the shortcode like this: `[embed]https://my.matterport.com/show/?m=your-model-id[/embed]`.

### Does it work with the Classic Editor?

Yes, but the best experience is with the Block Editor (Gutenberg), which gives you a better preview and easier customization.

### Can I use it with other page builders?

If your page builder supports oEmbed, it should work because Matterport is added to the list of providers. Just paste the Matterport model URL into your page builder's content area or any widget that supports embedding external content.

## Changelog

### 1.0.2

-   Update minimum required version to 5.0. This plugin could work with WordPress 2.9+ but is built for the Block Editor. The plugin also requires at least WordPress 4.6 for modern localization support.

### 1.0.1

-   Update FAQ and description in documentation.
-   Add missing text domain headers.
-   Add preview blueprint.

### 1.0.0

-   Public release.

### 0.3.0

-   Add GitHub workflows to deploy and release the plugin on WordPress.org SVN repository.

### 0.2.2

-   Update `readme.txt` with "Screenshots" section.
-   Move all assets into `.wordpress-org` folder.

### 0.2.1

-   Rename plugin name, slug and namespace.
-   Update plugin description.
-   Rename block variation title.
-   Add missing icon and screenshot.

### 0.2.0

-   Rename plugin name, slug and namespace.

### 0.1.0

-   Initial release.
