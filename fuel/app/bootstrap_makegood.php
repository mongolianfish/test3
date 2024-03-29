<?php

// Load the PUPUnit Autoloader
include_once('PHPUnit/Autoload.php');

/**
 * Set error reporting and display errors settings.  You will want to change these when in production.
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
// for MakeGood
$_SERVER['doc_root'] = '../../';
$_SERVER['app_path'] = 'fuel/app';
$_SERVER['core_path'] = 'fuel/core';
$_SERVER['package_path'] = 'fuel/packages';

$app_path		= trim($_SERVER['app_path'], '/').'/';
$package_path	= trim($_SERVER['package_path'], '/').'/';
$core_path		= trim($_SERVER['core_path'], '/').'/';

/**
 * Website docroot
 */
define('DOCROOT', realpath(__DIR__.DIRECTORY_SEPARATOR.$_SERVER['doc_root']).DIRECTORY_SEPARATOR);

( ! is_dir($app_path) and is_dir(DOCROOT.$app_path)) and $app_path = DOCROOT.$app_path;
( ! is_dir($core_path) and is_dir(DOCROOT.$core_path)) and $core_path = DOCROOT.$core_path;
( ! is_dir($package_path) and is_dir(DOCROOT.$package_path)) and $package_path = DOCROOT.$package_path;

define('APPPATH', realpath($app_path).DIRECTORY_SEPARATOR);
define('PKGPATH', realpath($package_path).DIRECTORY_SEPARATOR);
define('COREPATH', realpath($core_path).DIRECTORY_SEPARATOR);

unset($app_path, $core_path, $package_path, $_SERVER['app_path'], $_SERVER['core_path'], $_SERVER['package_path']);

// Get the start time and memory for use later
defined('FUEL_START_TIME') or define('FUEL_START_TIME', microtime(true));
defined('FUEL_START_MEM') or define('FUEL_START_MEM', memory_get_usage());

// Boot the app
require_once APPPATH.'bootstrap.php';

// Set the environment to TEST
Fuel::$env = Fuel::TEST;
Fuel::$is_test = true;

// Import the TestCase class
import('testcase');