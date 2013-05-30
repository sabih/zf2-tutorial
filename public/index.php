<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
//1. Sabih//chdir(dirname(__DIR__));

// Setup autoloading
//2. Sabih//require 'init_autoloader.php';

// Run the application!
//3. Sabih//Zend\Mvc\Application::init(require 'config/application.config.php')->run();

// Commented 3 lines above and
// Added below codes from "http://framework.zend.com/manual/2.2/en/user-guide/skeleton-application.html"

/**
 * Display all errors when APPLICATION_ENV is development.
 */
if ($_SERVER['APPLICATION_ENV'] == 'development') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();