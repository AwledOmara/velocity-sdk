<?php
namespace Velocity;

class STSUnavailableFault extends Error
{
	public function __construct() { 
		parent::__construct('Security Token Service is unavailable', 'STSUnavailableFault');
	}
}

