<?php

// Report error if BuddyPress is not active

function plfb_warn_if_buddypress_inactive()
{

    $current_screen = get_current_screen();

    if (!class_exists('BuddyPress') && $current_screen->id === "plugins") {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><b><?php _e('Profile Links for BuddyPress', 'plfb-core'); ?></b></p>
            <p><?php _e('You need to activate or install BuddyPress for this plugin to work.', 'plfb-core'); ?></p>
        </div>
    <?php
}
}
add_action('admin_notices', 'plfb_warn_if_buddypress_inactive', 1);
