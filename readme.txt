=== Embed Block for Matterport ===
Plugin URI:        https://github.com/alexandrebuffet/embed-block-for-matterport
Description:       Adds Matterport oEmbed support and Matterport Embed block variation.
Tags:              matterport, oembed, embed, 3d, virtual model
Contributors:      alexandrebuffet, bsaweb, sebastienserre
Requires at least: 2.9
Requires PHP:      7.1
Tested up to:      6.8
Stable tag:        1.0.1
Text Domain:       embed-block-for-matterport
License:           GPLv2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

Adds Matterport oEmbed support and provides a new Embed block variation.

== Description ==

This plugin simply registers Matterport as an oEmbed provider in WordPress, allowing you to easily embed 3D models by pasting their link.

Once activated, simply paste any Matterport model URL into the WordPress Block Editor and it will automatically be embedded as a variation of the "Embed" block.

This works seamlessly in the Block Editor, and pasting a link also works in the Classic Editor, though we recommend using the Block Editor to get the best results and editing experience.

No coding. Just paste and publish.

**Supported Matterport URL formats:**
- `https://my.matterport.com/show/?m=xxxxxxxxxxx` (11 characters - model ID)
- `https://my.matterport.com/show/?m=xxxxxxxxxxxxxxxxxxxxxxxx` (25 characters - view ID)

**Note:** Matterport supports two types of IDs:
- **11 characters:** Model IDs (for complete 3D models)
- **25 characters:** View IDs (for specific views of a model)

For more information about Matterport models and embedding options, visit the [official Matterport documentation](https://support.matterport.com/s/article/Embed-a-Matterport-3D-Model?language=en_US).

== Installation ==

= Installation from within WordPress =

1. Visit **Plugins > Add New**.
2. Search for **Embed Block for Matterport**.
3. Install and activate the Embed Block for Matterport plugin.

= Manual installation =

1. Upload the entire `embed-block-for-matterport` folder to the `/wp-content/plugins/` directory.
2. Visit **Plugins**.
3. Activate the Embed Block for Matterport plugin.

== Frequently Asked Questions ==

= Is this plugin affiliated with Matterport? =

No. This plugin is an independent project and is not affiliated with or endorsed by Matterport.

= Do I need a Matterport account to use this plugin? =
No, you just need a public Matterport model link. The plugin enables you to embed models, but does not create them.

= Does it work with shortcode? =
Yes! Since this plugin registers Matterport as an oEmbed provider, you can use the native WordPress `[embed]` shortcode with any Matterport model URL. Simply wrap your Matterport URL with the shortcode like this: `[embed]https://my.matterport.com/show/?m=your-model-id[/embed]`.

= Does it work with the Classic Editor? =
Yes, but the best experience is with the Block Editor (Gutenberg), which gives you a better preview and easier customization.

= Can I use it with page builders? =
If your page builder supports oEmbed, it should work because Matterport is added to the list of providers. Just paste the Matterport model URL into your page builder's content area or any widget that supports embedding external content.

== Screenshots ==

1. Matterport model embed in block editor.

== Changelog ==

= 1.0.1 =

-   Update FAQ and description in documentation.
-   Add missing text domain headers.
-   Add preview blueprint.

= 1.0.0 =

-   Public release.
