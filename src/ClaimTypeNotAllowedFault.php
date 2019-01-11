<?php
namespace Velocity;

class ClaimTypeNotAllowedFault extends Error
{
	public function __construct() { 
		parent::__construct('Claim Type Not Allowed', 'ClaimTypeNotAllowedFault');
	}
}
