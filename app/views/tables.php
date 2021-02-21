<?php

/**
 * @package #Olubolu2021
*/

use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->create( 'images', function( $table ){
	$table->id();
	$table->string( 'images' );
	$table->timestamps();
});

Capsule::schema()->create('comments', function( $table ){
	$table->id();
	$table->string( 'name' );
	$table->text( 'comments' );
	$table->timestamps();
});