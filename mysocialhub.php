<?php

/*
Plugin Name: My Social Hub
Plugin URI: http://dawnp.sgedu.site
Description: A plugin that pushes posts to Facebook, Instagram and Twitter
Version: 1.0.1
Author: Dawn Passerini
Author URI: http://dawnp.sgedu.site
License: GPL2
*/

//code starts here

//checks if plugin is called directly and exits. Help deter hacking

if ( ! defined( 'ABSPATH' ) ) {

    exit;

}

//My Social Hub Plugin options found under the settings menu in the admin panel

    // display My Social Hub settings page
        function mysocialhub_display_settings_page() {

            // checks if current user in WP is allowed to make changes
            if ( ! current_user_can( 'manage_options' ) ) return;

            ?>

            <div class="wrap">
                <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
                <form action="options.php" method="post">
                    <?php
                    // WP function shows the options
                    settings_fields( 'mysocialhub_options' );
                    // WP function showing the options sections
                    do_settings_sections( 'mysocialhub' );
                    // submit button
                    submit_button();
                    ?>
                </form>
            </div>
            <?php
        }

        //Adds to the settings menu
            add_submenu_page(
                'options-general.php',
                'MySocialHub Settings',
                'MySocialHub',
                'manage_options',
                'mysocialhub',
                'mysocialhub_display_settings_page'
            );

        }
        add_action( 'admin_menu', 'myplugin_add_sublevel_menu' );
