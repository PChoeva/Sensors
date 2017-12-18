<?php
/**
 * The development database settings. These get merged with the global settings.
 */
$servername = 'localhost';
return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host='.$servername.';dbname=sensors',
			'username'   => 'root',
			'password'   => 'Admin#123',
		),
	),
);
