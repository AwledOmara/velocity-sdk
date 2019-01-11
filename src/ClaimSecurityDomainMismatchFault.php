<?php
namespace Velocity;

class ClaimSecurityDomainMismatchFault extends Error
{
	public function __construct() { 
		parent::__construct('Claim Security Domain Mismatch', 'ClaimSecurityDomainMismatchFault');
	}
}
