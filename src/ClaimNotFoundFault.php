<?php
namespace Velocity;

class ClaimNotFoundFault extends Error
{
	public function __construct() { 
		parent::__construct('Claim Not Found', 'ClaimNotFoundFault');
	}
}
