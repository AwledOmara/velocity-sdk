<?php
namespace Velocity;

class ServiceUnavailableError extends Error
{
	public function __construct() { 
		parent::__construct('Service Unavailable', 'ServiceUnavailableError');
	}
}

