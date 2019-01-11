<?php
namespace Velocity;

class InvalidTokenFault extends Error
{
	public function __construct() { 
		parent::__construct('Invalid Token', 'InvalidTokenFault');
	}
}

