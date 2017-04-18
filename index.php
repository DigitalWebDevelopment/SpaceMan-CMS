<?php

/* 
 * Bootstrap file for defining application directory paths, list dependencies,
 * set application evironment and require the PSR-4 class Autoloader.
 */

// Base directory, directory separator for the file system and autoloader location
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('APP_ROOT') or define('APP_ROOT', dirname(__FILE__).DS);
defined('AUTOLOAD') or define('AUTOLOAD', 'digiwebdev'.DS.'psr4autoloader');

// Require Autoloader
require_once APP_ROOT.AUTOLOAD.DS.'psr4autoloader.php';


use digiwebdev\spaceman\application\SpaceMan_CMS as Spaceman;
use digiwebdev\spaceman\controllers\Config as Config;

/*
 * Use this to set the evironment of the appliaction
 * 
 * 'DEV'     - for development and testing (Displays errors and warnings)
 * 'DEV_ERR' - for development and testing (Displays only errors)
 * 'PROD'    - for deployment of production application (Suppresses errors and
 * warnings)
 */
Config::set('environment','DEV');

/*
 * Use this to set log file destination
 * 
 * 'spaceman' - Default (Application)
 * 'syslog'   - System log file (Linux)
 */
Config::set('log_file', 'spaceman');

// Start application
Spaceman::start('init');
