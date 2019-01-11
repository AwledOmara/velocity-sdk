<?php
namespace Velocity;

class ClaimPropertyValidationFault extends Error
{
	public function __construct() { 
		parent::__construct('Claim Property Validation', 'ClaimPropertyValidationFault');
	}
}