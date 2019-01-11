<?php
namespace Velocity;

class UnexpectedError extends Error
{
	public function __construct($message) {
		parent::__construct($message, 'unexpectedError');
	}
}
