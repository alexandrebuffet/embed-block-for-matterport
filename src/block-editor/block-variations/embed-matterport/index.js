/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { registerBlockVariation } from '@wordpress/blocks';

/**
 * Internal dependencies
 */
import { embedMatterportIcon } from '../../../icons';

registerBlockVariation( 'core/embed', {
	name: 'matterport',
	icon: embedMatterportIcon,
	title: __( 'Embed Matterport', 'embed-matterport' ),
	description: __( 'Embed a Matterport model.', 'embed-matterport' ),
	attributes: {
		providerNameSlug: 'matterport',
		responsive: true,
		previewable: false,
	},
	patterns: [ '/https?://my.matterport.com/show/?m=.*#i' ],
	isActive: [ 'providerNameSlug' ],
} );
