<?php
namespace Velocity;


class CWSInvalidMessageFormatFault extends Error
{
	public function __construct() { 
		parent::__construct('Invalid Message Format', 'CWSInvalidMessageFormatFault');
	}
}