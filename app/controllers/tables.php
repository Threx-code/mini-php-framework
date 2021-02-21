<?php

/**
 * @package #Olubolu2021
*/

use Controller\Controller;

class Tables extends Controller
{

	public function index()
	{
		$this->model( 'Tables' );
		$this->views( 'tables' );
	}

}