<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Readspec', // Name of theme
		'theme_slug'     => 'readspec', // Theme slug
		'version'        => '1.4.2', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'readspec' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'readspec' ),
		'license-key'               => __( 'License Key', 'readspec' ),
		'license-action'            => __( 'License Action', 'readspec' ),
		'deactivate-license'        => __( 'Deactivate License', 'readspec' ),
		'activate-license'          => __( 'Activate License', 'readspec' ),
		'status-unknown'            => __( 'License status is unknown.', 'readspec' ),
		'renew'                     => __( 'Renew?', 'readspec' ),
		'unlimited'                 => __( 'unlimited', 'readspec' ),
		'license-key-is-active'     => __( 'License key is active.', 'readspec' ),
		'expires%s'                 => __( 'Expires %s.', 'readspec' ),
		'expires-never'             => __( 'Lifetime License.', 'readspec' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'readspec' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'readspec' ),
		'license-key-expired'       => __( 'License key has expired.', 'readspec' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'readspec' ),
		'license-is-inactive'       => __( 'License is inactive.', 'readspec' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'readspec' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'readspec' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'readspec' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'readspec' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'readspec' ),
	)

);
