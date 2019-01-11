<?php
namespace Velocity;

class CWSExtendedDataNotSupportedFault extends Error
{
	public function __construct() { 
		parent::__construct('Manage Billing Data Not Supported', 'CWSExtendedDataNotSupportedFault');
	}
}
