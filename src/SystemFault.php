<?php
namespace Velocity;

class SystemFault extends Error
{
	public function __construct() { 
		parent::__construct('System problem', 'SystemFault');
	}
}
