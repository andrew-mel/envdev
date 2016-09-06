<?php
/**
 * @file
 * Local settings file
 *v 1.04 change
 * This file should be used to hold environment specific settings.
 *
 * Drupal variables can be overriden in this file:
 * @see http://drupal.org/node/1525472
 */

/** Local database settings **************************************************/

$db_name = '';
$db_user = '';
$db_pass = '';
$db_host = '';

/** Drupal configuration *****************************************************/

// Disable caching
$conf['cache'] = 0;
$conf['block_cache'] = 0;

// No Google Analytics
$conf['googleanalytics_account'] = '';

// No CSS/JS preprocess
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;

// Secure pages - disable
$conf['securepages_enable'] = 0; // Disable

// Image processing
$conf['imageapi_image_toolkit'] = 'gd2';

// Allow access to update.php without the admin account
$update_free_access = TRUE;

// File paths
$conf['file_private_path'] = '';
$conf['file_temporary_path'] = '';

// Disable clean URLS
// $conf['clean-url'] = 0;

/** Drupal database array ****************************************************/

// Database
$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => $db_name,
      'username' => $db_user,
      'password' => $db_pass,
      'host' => $db_host,
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

/** PHP settings *************************************************************/

// Show errors
ini_set('display_errors', 'On');

/** Varnish ******************************************************************/

// Add Varnish as the page cache handler.
// $conf['cache_backends'] = array('sites/all/modules/contrib/varnish/varnish.cache.inc');
// $conf['cache_class_cache_page'] = 'VarnishCache';

// Drupal 7 does not cache pages when we invoke hooks during bootstrap.
// This needs to be disabled.
// $conf['page_cache_invoke_hooks'] = FALSE;

/** Environment Indicator ****************************************************/

// To enable an environment indicator for development, set this to TRUE.
$conf['environment_indicator_enabled'] = FALSE;

// Any valid CSS colour value can be used here.
$conf['environment_indicator_color'] = 'dark-red';
$conf['environment_indicator_text'] = 'SITE NAME - DEVELOPMENT';
