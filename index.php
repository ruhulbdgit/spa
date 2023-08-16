
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 *  Single page application entry point
 */

// load config file
require_once 'config.php';

// load db connection file
require_once 'dbconnect.php';

// Load the application bootstrap
require_once 'bootstrap.php';
