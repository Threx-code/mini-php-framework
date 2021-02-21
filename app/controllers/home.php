<?php
/**
 * @package #Olubolu2021
*/

use Controller\Controller;
use Controller\Validator as Validator;

class Home extends Controller {

	use Validator;
	

	/*this is how to create a view*/
	public function index()
	{
		$crfToken  = $this->crfToken();
		$this->views( 'index', compact('crfToken'));
	}

}