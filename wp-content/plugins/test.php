<?php

/**
 * Plugin Name:       Custom Plugin
 * Description:       This plugin is the custom plugin and created by velsof.
 * Version:           1.0.0
 * Author:            Velsof
 * Author URI:
 */
function custom_plugin_register_settings() {

    register_setting('custom_plugin_options_group', 'first_field_name');

    register_setting('custom_plugin_options_group', 'second_field_name');

    register_setting('custom_plugin_options_group', 'third_field_name');
}

add_action('admin_init', 'custom_plugin_register_settings');

function custom_plugin_setting_page() {

  // add_options_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
   add_options_page('Custom Plugin', 'Custom Plugin Setting', 'manage_options', 'custom-plugin-setting-url', 'custom_page_html_form');
   // custom_page_html_form is the function in which I have written the HTML for my custom plugin form.
}

add_action('admin_menu', 'custom_plugin_setting_page');

function custom_page_html_form() { ?>
    <div class="wrap">
        <h2>Custom Plugin Setting Page Heading</h2>
        <form method="post" action="options.php">
            <?php settings_fields('custom_plugin_options_group'); ?>

            <table class="form-table">
                <tr>
                    <th><label for="first_field_id">First Field Name:</label></th>
                    <td>
                        <input type = 'text' class="regular-text" id="first_field_id" name="first_field_name" value="<?php echo get_option('first_field_name'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="second_field_id">Second Field Name:</label></th>
                    <td>
                        <input type = 'text' class="regular-text" id="second_field_id" name="second_field_name" value="<?php echo get_option('second_field_name'); ?>">
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Third Field Name:</label></th>
                    <td>
                        <input type = 'text' class="regular-text" id="third_field_id" name="third_field_name" value="<?php echo get_option('third_field_name'); ?>">
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
    </div>
<?php } ?>