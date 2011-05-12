<?php defined('SYSPATH') or die('No direct script access.');

// Load Zend's Autoloader
if ($path = Kohana::find_file('vendor', 'pheanstalk/classes/Pheanstalk')) {
	ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.dirname($path));
	require_once "Pheanstalk/ClassLoader.php";
	Pheanstalk_ClassLoader::register(dirname($path));
}