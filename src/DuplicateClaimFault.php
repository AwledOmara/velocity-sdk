<?php
namespace Velocity;

class DuplicateClaimFault extends Error
{
	public function __construct() { 
		parent::__construct('Duplicate Claim', 'DuplicateClaimFault');
	}
}

