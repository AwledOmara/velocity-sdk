<?php
namespace Velocity;
class AuthenticationFault extends Error
{
	public function __construct() { 
		parent::__construct('Authentication Failure', 'AuthenticationFault');
	}
}

