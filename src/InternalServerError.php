<?php
namespace Velocity;

class InternalServerError extends Error
{
	public function __construct() {
		parent::__construct('Internal Server Error', 'internalServerError');
	}
}

