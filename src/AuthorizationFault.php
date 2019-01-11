<?php
namespace Velocity;


class AuthorizationFault extends Error
{
	public function __construct() { 
		parent::__construct('Authorization Failure', '_AuthorizationFault');
	}
}
