<?php
// Configuration settings for the DeepSec application

// Database connection settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'deepsec_db');

// Application constants
define('APP_NAME', 'DeepSec');
define('APP_VERSION', '1.0');

// Error reporting settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session for user progress tracking
session_start();
?>