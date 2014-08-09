<?php
/**
 * This is the entry point for all zoop sage analytics.
 * 
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__ . '/../../'));

// Setup autoloading
require 'vendor/autoload.php';

// Run the application!
Zend\Mvc\Application::init(include 'config/application.config.php')->run()->send();
