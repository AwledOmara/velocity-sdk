<?php
namespace Velocity;

class CWSOperationNotSupportedFault extends Error
{
	public function __construct() { 
		parent::__construct('Operation Not Supported', 'CWSOperationNotSupportedFault');
	}
}
