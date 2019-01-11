<?php 
namespace Velocity;

class CWSInvalidOperationFault extends Error
{
	public function __construct() { 
		parent::__construct('Invalid operation is being attempted', 'CWSInvalidOperationFault');
	}
}