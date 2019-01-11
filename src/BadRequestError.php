<?php namespace Velocity;


class BadRequestError extends Error
{
	public function __construct() { 
		parent::__construct('Bad Request', 'badRequestError');
	}
}











