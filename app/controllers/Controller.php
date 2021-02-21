<?php

/**
 * @package #Olubolu2021
*/


namespace Controller;


class Controller

{

	public function model( $model )
	{
		require_once "app/models/". $model. ".php";
		return new $model();
	}

	public function views( $view, $data = [])
	{
		extract($data);
		require_once "app/views/". $view. ".php";
	}

}