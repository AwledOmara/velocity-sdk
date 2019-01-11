<?php
namespace Velocity;

class DuplicateUserFault extends Error
{
	public function __construct() { 
		parent::__construct('Duplicate User', 'DuplicateUserFault');
	}
}

