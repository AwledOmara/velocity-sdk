<?php
namespace Velocity;

class CWSTransactionServiceUnavailableFault extends Error
{
	public function __construct() { 
		parent::__construct('Transaction Service Unavailable', 'CWSTransactionServiceUnavailableFault');
	}
}

