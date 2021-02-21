<?php
/**
 * @package #Olubolu2021
*/

use Illuminate\Database\Eloquent\Model as Eloquent;

class Images extends Eloquent
{

	 /*
     * The attributes that should be passed to array
     */
	protected $fillable = [ 'firstname', 'lastname', 'email', 'password' ];

	 /*
     * The attributes that should be hidden
     */

	 protected $hidden = ['password'];
}

