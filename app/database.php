<?php

/**
 * @package #Olubolu2021
*/

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

/* development environment*/
$capsule->addConnection([
	'driver'	=> 'mysql',
	'host'		=> 'localhost',
	'username'	=> '', /* insert your database username*/
	'password'	=> '', /*insert your database password*/
	'database'	=> '', /* insert your database name*/
	'charset'	=> 'utf8',
	'collation'	=> 'utf8_unicode_ci'		
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();