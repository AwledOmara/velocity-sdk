<?php
namespace Velocity;

class CWSDeserializationFault extends Error
{
	public function __construct() { 
		parent::__construct('Deserialization not Successfull', 'CWSDeserializationFault');
	}
}
