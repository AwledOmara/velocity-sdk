<?php
namespace Velocity;

class GatewayTimeoutError extends Error
{
	public function __construct() { 
		parent::__construct('Gateway Time out', 'GatewayTimeoutError');
	}
}


