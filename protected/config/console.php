<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	
	'preload'=>array('log'),
	
	// autoloading model and component classes
		'import'=>array(
			'application.models.*',
			'application.components.*',
	),
	
	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		/* */
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiiblog',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		/* */
	),
);