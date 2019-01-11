<?php
namespace Velocity;
class AccessClaimNotFoundFault extends Error
{
	public function __construct() { 
		parent::__construct('Access Claim Not Found', 'AccessClaimNotFoundFault');
	}
}

