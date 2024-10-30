<?php
/**
 * @link       http://www.techniblogic.com/jetpack-subscription-plus/
 * @since      1.0.0
 * @author	   Nimish Gupta
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}



function remove_jetpack_subscription_plus() {
	unregister_widget('jetpack_subscription_plus');
}

add_action( 'widgets_init', 'remove_jetpack_subscription_plus' );

/******* The end.  ********/