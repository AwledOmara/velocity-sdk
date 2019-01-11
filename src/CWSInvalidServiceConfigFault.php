<?php
namespace Velocity;

class CWSInvalidServiceConfigFault extends Error
{
	public function __construct() { 
		parent::__construct('Invalid Service Configuration', 'CWSInvalidServiceConfigFault');
	}
}
