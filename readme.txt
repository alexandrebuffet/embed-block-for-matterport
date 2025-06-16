=== Embed Matterport ===
Plugin URI:        https://github.com/bsaweb/embed-matterport
Description:       Adds support for Matterport embed. Paste the link of your 3D model in the block editor, and you're done.
Tags:              matterport, oembed, embed, 3d, virtual model
Contributors:      alexandrebuffet, bsaweb
Requires at least: 2.9
Requires PHP:      7.1
Tested up to:      6.8
Stable tag:        0.2.0
License:           GPLv2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Adds support for Matterport embed. Paste the link of your 3D model in the block editor, and you're done.

== Description ==

This plugin simply registers Matterport as an oEmbed provider in WordPress, allowing you to easily embed 3D models by pasting their link.

Once activated, simply paste any Matterport model URL into the WordPress Block Editor and it will automatically be embedded as a variation of the "Embed" block.

This works seamlessly in the Block Editor, and pasting a link also works in the Classic Editor, though we recommend using the Block Editor to get the best results and editing experience.

No coding, no shortcodes. Just paste and publish.

== Installation ==

= Installation from within WordPress =

1. Visit **Plugins > Add New**.
2. Search for **Embed Matterport**.
3. Install and activate the Embed Matterport plugin.

= Manual installation =

1. Upload the entire `embed-matterport` folder to the `/wp-content/plugins/` directory.
2. Visit **Plugins**.
3. Activate the Embed Matterport plugin.

== Frequently Asked Questions ==

= Is this plugin affiliated with Matterport? =

No. This plugin is an independent project and is not affiliated with or endorsed by Matterport.

= Do I need a Matterport account to use this plugin? =
No, you just need a public Matterport model link. The plugin enables you to embed models, but does not create them.

= Does it work with the Classic Editor? =
Yes, but the best experience is with the Block Editor (Gutenberg), which gives you a better preview and easier customization.

= Can I use it with page builders? =
If your page builder supports oEmbed, it should work because Matterport is added to the list of providers. Just paste the Matterport model URL into your page builder's content area or any widget that supports embedding external content.

== Changelog ==

= 0.1.0 =  
-   Initial release: Adds Matterport as oEmbed provider and a custom Matterport variation of the Embed block.
