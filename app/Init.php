<?php

/**
 * @package #Olubolu2021
*/

namespace App;

use Kernel\App;
use Kernel\Error;
use Controller\Sanitizer;

require_once "database.php";

final class Init{

	use Sanitizer;

	public function getService()
	{
		Sanitizer::sameSessionId();
		return [
			App::class,
			Error::class,
		];
	}

	public static function register()
	{
		foreach( self::getService()  as $class){
			$services = self::initialize($class);
		}
	}


	public static function initialize( $class )
	{
		return new $class();
	}

	
}