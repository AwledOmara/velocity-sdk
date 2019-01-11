<?php
namespace Velocity;

class CWSTransactionAlreadySettledFault extends Error
{
	public function __construct() { 
		parent::__construct('Transaction Already Settled', 'CWSTransactionAlreadySettledFault');
	}
}
