<?php
/**
 * Define your environments in this array as:
 * [SERVER_NAME] => [Environment]
 * 
 * Where [Environment] corresponds to the names of your files in /env
 * 
 * i.e. setting environment to 'foo' will load /env/foo.php
 * 
 */
$GLOBALS['environments'] = array(
	'127.0.0.1' => 'local',
	'localhost' => 'local',
	'underscorephp' => 'local',
	'local.underscorephp.com' => 'local',
	'dev.underscorephp.com' => 'dev',
	'stage.underscorephp.com' => 'stage',
	'prod.underscorephp.com' => 'prod',
	'_DEFAULT_' => 'prod'
);
