<?php
namespace Velocity;

class CWSConnectionFault extends Error
{
	public function __construct() { 
		parent::__construct('Connection Failure', 'CWSConnectionFault');
	}
}
