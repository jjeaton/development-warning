<?php
/**
 * Plugin Name: Development Warning
 * Plugin URI:  http://www.josheaton.org
 * Description: Warns you if you are currently in your development environment
 * Author:      Josh Eaton
 * Version:     0.1
 * Author URI:  http://www.josheaton.org
 */

/* Only add the items if local dev is defined */
if( defined( 'WP_LOCAL_DEV' ) ) {
  add_action('admin_bar_menu', 'dew_admin_bar_dev_warning');
  add_action('wp_head', 'dew_style_admin_bar_warning');
  add_action('admin_head', 'dew_style_admin_bar_warning');
}

/**
 * Add the Warning item
 */
function dew_admin_bar_dev_warning() {
  global $wp_admin_bar;
  $wp_admin_bar->add_node( array(
    'id' => 'dew-dev-warning',
    'title' => __('DEVELOPMENT'),
    'meta' => array(
      'class' => 'dev-warning'
    )
  ) );
}

/**
 * @todo: Add a warning to the top of page
 */
function dew_top_of_page_dev_warning() {

}

/* Style the admin-bar warning */
/**
 * @todo: Change the styles to also work in the Admin
 */
function dew_style_admin_bar_warning() {
?>
<style>
#wpadminbar .dev-warning > div {
  color: red;
  font-size: 1.1em;
  font-weight: bold;
}
</style>
<?php
}

?>
