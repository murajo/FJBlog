<?php
// Bootstrap the framework DO NOT edit this
require COREPATH.'bootstrap.php';

\Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
));

// Register the autoloader
\Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
\Fuel::$env = \Arr::get($_SERVER, 'FUEL_ENV', \Arr::get($_ENV, 'FUEL_ENV', \Fuel::DEVELOPMENT));

// Initialize the framework with the config file.
\Fuel::init('config.php');

$_SERVER['ACOUNT_ROOT_ACCESS_TOKEN'] = "test";
//$_SERVER['ACOUNT_ROOT_ACCESS_TOKEN'] ="; "b501386bde3f260ec7732230e06359e2
$_SERVER['consumer_key'] = "j9d1ZAYvAtZRVAebSEgCCaEkE";
$_SERVER['consumer_secret'] = "Km0puycp56JpOSaSThvrrfGUuMqgYe03D6u2tdJcbS12ElbT7n";
$_SERVER['access_token'] = "707600108234223616-UGEOhkuI9GoTTBMmzU3RwuqQY12d7nW";
$_SERVER['access_token_secret'] = "MrcB5Xp8wuJKODwbNkwYkCVj4L3dKmHfQtszJFLGGkoq9";