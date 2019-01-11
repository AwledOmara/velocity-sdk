<?php
namespace Velocity;

class CWSFault extends Error
{
	public function __construct() { 
		parent::__construct('General CWS fault', 'CWSFault');
	}
}
