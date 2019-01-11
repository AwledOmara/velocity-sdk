<?php
namespace Velocity;

class CWSTransactionFailedFault extends Error
{
	public function __construct() { 
		parent::__construct('Transaction Failed', 'CWSTransactionFailedFault');
	}
}

