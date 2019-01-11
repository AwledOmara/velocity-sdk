<?php 
namespace Velocity;

class Error extends \Exception
{
	public function __construct($message, $name) {
		parent::__construct($message);
		$this->name = $name;
	}
}
