<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://shawnch.in
 * @since      1.0.0
 *
 * @package    My_Test_React_Plugin
 * @subpackage My_Test_React_Plugin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
do_action('before_react_app_render');
?>
<div id="my-test-react-plugin-root"></div>
<?php
do_action('after_react_app_render');
?>