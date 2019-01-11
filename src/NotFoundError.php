<?php
namespace Velocity;

class NotFoundError extends Error
{
	public function __construct() { 
		parent::__construct('Not Forund', 'notFoundError');
	}
}


