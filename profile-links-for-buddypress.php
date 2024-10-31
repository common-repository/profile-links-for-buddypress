<?php
/*
Plugin Name:   Profile Links for BuddyPress
Plugin URI:    https://kierantaylor.io/profile-links-for-buddypress/
Description:   Adds the ability to create dynamic BuddyPress profile links in pages, posts and CPTs.
Version:       1.5
Text Domain:   plfb-core
Author:        Kieran Taylor
Author URI:    https://kierantaylor.io
*/


// Exit if accessed directly

if (!defined('ABSPATH')) {
    exit;
}

// Require errors

// Require error notices

require_once plugin_dir_path(__FILE__) . 'error-notices/errors.php';

// Begin building BuddyPress Profile Links shortcode

function plfb_generate_shortcode($atts)
{

    // Shortcode attributes

    $atts = shortcode_atts(
        array(
            'url' => '',
            'text' => '',
            'class' => '',
            'target' => '',
            'rel' => '',
        ),
        $atts
    );

    // Generate path to member profile

    $link = bp_loggedin_user_domain();

    // Check if user is logged in

    if (is_user_logged_in()) {

        // Build link
        // Class added 1.4
        // Target and rel added 1.5

        return "<a rel='" . $atts['rel'] . "' class='" . $atts['class'] . "' href='" . esc_attr($link) . $atts['url'] . "' target='" . $atts['target'] . "'>" . $atts['text'] . "</a>";
    }

    // If user is logged out

    else {

        // Show login message

        return __('you need to login to see this link', 'plfb-core');
    }
}

add_shortcode('profile', 'plfb_generate_shortcode');