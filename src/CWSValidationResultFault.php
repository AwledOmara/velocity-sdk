<?php
namespace Velocity;

class CWSValidationResultFault extends Error
{
	public function __construct() { 
		parent::__construct('Xml validation Errors', 'CWSValidationResultFault');
	}
}
